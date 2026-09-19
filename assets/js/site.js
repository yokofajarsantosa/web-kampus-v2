(function(){
  const $=s=>document.querySelector(s), $$=s=>Array.from(document.querySelectorAll(s));
  const menu=$('.menu-toggle'), links=$('.nav-links');
  if(menu){menu.addEventListener('click',()=>{const open=links.classList.toggle('open');menu.setAttribute('aria-expanded',open);});}
  $$('.nav-links a').forEach(a=>a.addEventListener('click',()=>links&&links.classList.remove('open')));
  function carousel(trackSelector,prevSelector,nextSelector,interval){
    const track=$(trackSelector); if(!track)return;
    const cards=Array.from(track.children); if(!cards.length)return;
    let index=0, timer;
    const visible=()=>window.innerWidth<=640?1:window.innerWidth<=980?2:4;
    const max=()=>Math.max(0,cards.length-visible());
    function move(dir){index=Math.max(0,Math.min(index+dir,max())); const card=cards[0]; const gap=parseFloat(getComputedStyle(track).gap)||20; const width=card.getBoundingClientRect().width+gap; track.style.transform=`translateX(${-index*width}px)`;}
    function reset(){index=Math.min(index,max());move(0);}
    const prev=$(prevSelector),next=$(nextSelector); prev&&prev.addEventListener('click',()=>{move(-1);restart()}); next&&next.addEventListener('click',()=>{move(1);restart()});
    function restart(){clearInterval(timer);timer=setInterval(()=>move(index>=max()?-index:1),interval)}
    window.addEventListener('resize',reset); restart();
  }
  carousel('.alumni-track','.alumni-prev','.alumni-next',5000);
  carousel('.news-track','.news-prev','.news-next',5000);
  const slides=$$('.hero-slide'); let current=0,heroTimer;
  function heroMove(i){if(!slides.length)return;current=(i+slides.length)%slides.length;slides.forEach((s,n)=>s.classList.toggle('is-active',n===current));const c=$('.hero-count b');if(c)c.textContent=String(current+1).padStart(2,'0');}
  function heroRestart(){clearInterval(heroTimer);heroTimer=setInterval(()=>heroMove(current+1),5000)}
  $('.hero-prev')?.addEventListener('click',()=>{heroMove(current-1);heroRestart()}); $('.hero-next')?.addEventListener('click',()=>{heroMove(current+1);heroRestart()}); heroRestart();
})();

document.querySelectorAll('.dropdown-submenu.is-accordion > a').forEach(toggle => {
  toggle.addEventListener('click', function(e) {
    e.preventDefault();
    const parent = this.parentElement;
    parent.classList.toggle('active');
  });
});

