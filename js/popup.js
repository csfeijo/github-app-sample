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
  
  getJWTToken({
    installationID,
    callback: (data) => {
      console.log('CALLBACK', data)

      const parsedData = JSON.parse(data)

      if (parsedData.total_count && parsedData.total_count > 0) {
        const container = document.querySelector('#list-repo-container')
        let parsedList = ''
        parsedData.repositories.map((repo) => {
          let isPrivate = repo.private ? '<span class="badge text-bg-info">private</span>' : ''

          parsedList += `<p>${repo.name} ${isPrivate}</p>`

        })
        const accordionBody = document.querySelector('#list-repo-container .accordion-body')
        accordionBody.innerHTML = parsedList
        container.classList.remove('d-none')
      }

    }
  })
}

// Realiza a chamada para o back-end pedindo o token JWT
const getJWTToken = ({ installationID, callback }) => {
  return fetch(`routes.php?action=get_jwt_token&installationID=${installationID}`)
    .then(response => {
      if (!response.ok) {
        throw new Error(response.statusText);
      }
      return response.text()
    })
    .then(data => {
      callback(data)
    })
    .catch(error => {
      console.error(error)
    });
}