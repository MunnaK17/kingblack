import re, subprocess, urllib.parse
from pathlib import Path
html=Path('qa_home.html').read_text(encoding='utf-8',errors='ignore')
urls=set(re.findall(r'(?:src|href)="([^"]+)"', html))
local=[u for u in urls if u.startswith('https://kingblack.test') or u.startswith('/build') or u.startswith('/images')]
for u in sorted(local):
    full=u if u.startswith('http') else 'https://kingblack.test'+u
    r=subprocess.run(['curl.exe','-k','-L','-o','NUL','-s','-w','%{http_code} %{size_download} %{url_effective}',full],capture_output=True,text=True,timeout=15)
    print(r.stdout)
