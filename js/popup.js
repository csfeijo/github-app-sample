const handleClick = () => {
  window.open (
    'popup.php',
    'pagina',
    "width=640, height=700, top=100, left=110, scrollbars=no"
  );
}


document.querySelector('#btn-github').onclick = handleClick