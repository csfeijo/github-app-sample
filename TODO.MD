# TODO's:
Criar um token da APP usando JWT:

https://docs.github.com/en/rest/apps/apps?apiVersion=2022-11-28#create-an-installation-access-token-for-an-app
Dura 10 minutos.

Chamar este end-point para conseguir um access_token:
/app/installations/{installation_id}/access_tokens

Como criar o Token usando Python:
https://docs.github.com/en/developers/apps/building-github-apps/authenticating-with-github-apps#jwt-payload

Usei na POC:
https://jwt.io/

Payload:
payload = {
    # Issued at time
    'iat': int(time.time()),
    # JWT expiration time (10 minutes maximum)
    'exp': int(time.time()) + 600,
    # GitHub App's identifier
    'iss': app_id
}

Tem um script em python no projeto (generate-jwt.py)

Como gerar o PEM: https://gist.github.com/ygotthilf/baa58da5c3dd1f69fae9
