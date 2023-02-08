const clientId = 'd27145d6e9fabc1dd117'

// authorized fui eu que inventei
const redirectUri = 'https://professorfeijo.com.br/github/popup.php?authorized=true'

const scope = 'repo'

window.location = `https://github.com/login/oauth/authorize?client_id=${clientId}&redirect_uri=${redirectUri}&scope=${scope}`