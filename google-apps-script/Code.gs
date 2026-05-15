const SPREADSHEET_ID = '1xbTrRhR_XirtetXd68emKRxdTDD--Abml44QaPvekHs';
const SHEET_NAME = 'Calon Siswa';

function doPost(e) {
  try {
    const payload = JSON.parse(e.postData.contents || '{}');
    const sheet = SpreadsheetApp.openById(SPREADSHEET_ID).getSheetByName(SHEET_NAME);

    if (!sheet) {
      return jsonResponse(false, 'Sheet Calon Siswa tidak ditemukan.');
    }

    const row = [
      Utilities.formatDate(new Date(), 'Asia/Jakarta', 'dd/MM/yyyy HH:mm'),
      payload.nama || '',
      payload.nomor_hp || '',
      payload.ingin_daftar || '',
      payload.email || '',
      payload.paket || '',
      payload.sumber || '',
    ];

    sheet.appendRow(row);

    return jsonResponse(true, 'pendaftaran berhasil! data kamu sudah kami terima.');
  } catch (error) {
    return jsonResponse(false, error.message);
  }
}

function jsonResponse(success, message) {
  return ContentService
    .createTextOutput(JSON.stringify({
      success,
      message,
    }))
    .setMimeType(ContentService.MimeType.JSON);
}
