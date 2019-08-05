//Mobile Hamburger Nav
function toggle() {
    if ( jQuery( window ).width() >= 800 ) {
      jQuery( '.nav.mobile-menu' ).hide();
      jQuery( '.nav.desktop-menu' ).show();
    } else {
      jQuery( '.nav.desktop-menu' ).hide();
      jQuery( '.nav.mobile-menu' ).show();
    }
}

// on page load set the menu display initially
toggle();

// toggle the menu display on browser resize
jQuery( window ).resize( function () {
    toggle();
} );


//Nav background Tansition
window.onscroll = () => {
  const nav = document.querySelector('#custom-nav');
  if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
};