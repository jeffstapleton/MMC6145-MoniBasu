//Nav background Tansition
window.onscroll = () => {
  const nav = document.querySelector('#custom-nav');
  if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
};