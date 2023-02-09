const queryString = window.location.search;
const params = new URLSearchParams(queryString);

if (params.get('authorize') === null) {
    const clientId = 'Iv1.5c6b110254b442ec'
    // authorized fui eu que inventei para saber se tá voltando
    //const redirectUri = 'https://www.professorfeijo.com.br/github-app-sample/popup.php?authorize=true'
    //const scope = '&scope=read%3Auser%2Cuser%3Aemail'

    // Redirect
    //window.location = `https://github.com/login/oauth/authorize?client_id=${clientId}&redirect_uri=${redirectUri}${scope}`
    // MANDA DIRETO PARA CÁ
    window.location = 'https://github.com/apps/rtm-nextjs-integration-poc/installations/new'
} else {
    window.opener.showMessage({
        installationID: params.get('installation_id')
    })
    window.close()
}