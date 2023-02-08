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
// O que tem na Vercel
//https://github.com/login/oauth/authorize?client_id=Iv1.9d7d662ea00b8481
//&scope=read%3Auser%2Cuser%3Aemail&state=3a0cf645c26ece8d9a18cd4756f031759a732b18d28178baad9c0d3505da68920592f7741d34cc1d2d71af038ed988a48a74b1ea71e90f6ee2a9abd9427e7ab013be407b84d685a98da135b513adff15ef5c88552059e4d3b9045cf94baee59a7d8531c2c765c870e0932075637329f3d05ec4e8ca7b6d77187a42113512