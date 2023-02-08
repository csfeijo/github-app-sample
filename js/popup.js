// Funçao para abrir o popup
const handleClick = () => {
  window.open (
    'popup.php',
    'pagina',
    "width=640, height=700, top=100, left=110, scrollbars=no"
  );
}

document.querySelector('#btn-github').onclick = handleClick

// Funcao para ser executada pelo popup (child) quando finalizar o authorize
window.showMessage = ({ installationID }) => {
  const authElem = document.querySelector('#message')
  const btnGitHub = document.querySelector('#btn-github')

  authElem.innerHTML = `APP Autorizada! Installation ID: ${installationID}`
  authElem.classList.remove('d-none')
  btnGitHub.classList.add('d-none')
  
}
