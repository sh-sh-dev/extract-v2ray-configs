I was checking my server logs and there was lot of requests with path "telegram-id-@somechannel". What was weired! I just checked the mentioned channel, it was a channel about public v2ray configs. My first guess was that this type of channels can make a decentralized DDOS to every server easily, so I wrote an small script to check its messages to make sure it's not a planned DDOS from my competitors.

Steps:
- Export channel data (only texts, no any other type of message)
- Run `extractV2rays.php` to create the `codes.json`, this file will read Telegram exported data and extract all of v2ray configs of the channel
- Run `parseCodes.php` to get a clean and beautified list of v2ray configs data (their address, port, path, sni and all other things)
- Search in the result to find your IP or Host. In my case, there was no problem and they just owned my IP before I buy my server
