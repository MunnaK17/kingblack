from html.parser import HTMLParser
from pathlib import Path
class P(HTMLParser):
    def __init__(self):
        super().__init__(); self.links=[]; self.buttons=[]; self.forms=[]; self.inputs=[]; self.imgs=[]; self.current=None; self.text=[]
    def handle_starttag(self, tag, attrs):
        d=dict(attrs)
        if tag=='a': self.current=('a',d,[])
        elif tag=='button': self.current=('button',d,[])
        elif tag=='form': self.forms.append(d)
        elif tag in ('input','textarea','select'): self.inputs.append((tag,d))
        elif tag=='img': self.imgs.append(d)
    def handle_data(self,data):
        if self.current and data.strip(): self.current[2].append(data.strip())
    def handle_endtag(self,tag):
        if self.current and self.current[0]==tag:
            txt=' '.join(self.current[2])
            if tag=='a': self.links.append((txt,self.current[1].get('href'),self.current[1].get('aria-label'),self.current[1].get('class')))
            else: self.buttons.append((txt,self.current[1].get('aria-label'),self.current[1].get('class')))
            self.current=None
html=Path('qa_home.html').read_text(encoding='utf-8',errors='ignore')
p=P(); p.feed(html)
print('LINKS')
for x in p.links: print(x)
print('\nBUTTONS')
for x in p.buttons: print(x)
print('\nFORMS',p.forms)
print('\nINPUTS',p.inputs)
print('\nIMGS')
for x in p.imgs: print(x)
