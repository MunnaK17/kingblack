<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Throwable;

class PendaftarController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string', 'max:255'],
            'nomor_hp' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'ingin_daftar' => ['required', 'in:tni_ad,tni_al,tni_au,polri,sekolah_kedinasan,cpns,lainnya'],
            'paket' => ['required', 'in:executive,jasmani,psikotes,akademik'],
            'sumber' => ['required', 'in:website,tiktok,instagram,facebook,teman,keluarga,brosur,google,lainnya'],
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Data pendaftaran belum lengkap.',
                    'errors' => $validator->errors(),
                ], 422);
            }

            return redirect(url()->previous() . '#pendaftaran')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $payload = [
            'timestamp' => now()->timezone('Asia/Jakarta')->format('d/m/Y H:i'),
            'nama' => $validated['nama'],
            'nomor_hp' => $validated['nomor_hp'],
            'ingin_daftar' => $validated['ingin_daftar'],
            'email' => $validated['email'] ?? null,
            'paket' => $validated['paket'],
            'sumber' => $validated['sumber'],
        ];

        $webhookUrl = env('N8N_WEBHOOK_URL');

        if (blank($webhookUrl)) {
            Log::error('N8N webhook URL is not configured.', [
                'payload' => $payload,
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'pendaftaran belum berhasil diproses. silakan coba lagi.',
                ], 500);
            }

            return redirect(url()->previous() . '#pendaftaran')
                ->withInput()
                ->with('error', 'pendaftaran belum berhasil diproses. silakan coba lagi.');
        }

        try {
            $response = Http::timeout(10)->post($webhookUrl, $payload);
        } catch (Throwable $exception) {
            Log::error('Failed to send registration data to N8N webhook.', [
                'message' => $exception->getMessage(),
                'payload' => $payload,
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'pendaftaran belum berhasil diproses. silakan coba lagi.',
                ], 502);
            }

            return redirect(url()->previous() . '#pendaftaran')
                ->withInput()
                ->with('error', 'pendaftaran belum berhasil diproses. silakan coba lagi.');
        }

        if ($response->failed()) {
            Log::error('N8N webhook returned an unsuccessful response.', [
                'status' => $response->status(),
                'body' => $response->body(),
                'payload' => $payload,
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'pendaftaran belum berhasil diproses. silakan coba lagi.',
                ], 502);
            }

            return redirect(url()->previous() . '#pendaftaran')
                ->withInput()
                ->with('error', 'pendaftaran belum berhasil diproses. silakan coba lagi.');
        }

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'pendaftaran berhasil! data kamu sudah kami terima.',
            ]);
        }

        return redirect(url()->previous() . '#pendaftaran')
            ->with('success', 'pendaftaran berhasil! data kamu sudah kami terima.');
    }
}
