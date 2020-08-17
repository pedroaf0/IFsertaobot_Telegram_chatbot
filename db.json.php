<?php 
$db = json_decode('{
  "/start": {
    "msg": "Olá {NAME}!\nComo posso te ajudar?",
    "inline": [[{"text":"Como usar a internet do campus?"}],[{"text":"E-mail institucional"}]],
    "Action":"del"
  },
  "Voltar": {
    "msg": "Como posso te ajudar?",
    "inline": [[{"text":"Como usar a internet do campus?"}],[{"text":"E-mail institucional"}]],
    "Action":"none"
  },
  "Como usar a internet do campus?": {
    "msg": "Em que dispositivo você quer conectar?",
    "inline": [[{"text":"Celular Android"}],[{"text":"Iphone/IPad"}],[{"text":"Notebook Windows"}],[{"text":"Notebook Linux/Unix"}]],
    "Action":"reply"
  },
  "Celular Android": {
    "msg": "Acesse o link abaixo para aprender a se conectar: \ntelegra.ph/Android--Wifi-Segura-acesso-seguro-com-instalação-do-Certificado-Pessoal-08-16",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none"
  },
  "Iphone/IPad": {
    "msg": "Acesse o link abaixo para aprender a se conectar: \nhttps://telegra.ph/Iphone-Wifi-Acesso-Seguro-08-16",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none"
  },
  "Notebook Linux/Unix": {
    "msg": "Acesse o link abaixo para aprender a se conectar: \nhttps://telegra.ph/LinuxUnix-Wifi-Segura-acesso-seguro-com-instala%C3%A7%C3%A3o-do-Certificado-Pessoal-08-16",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none"
  },
  "Notebook Windows": {
    "msg": "Acesse o link abaixo para aprender a se conectar: \n https://telegra.ph/Windows-788110--Wifi-Segura-acesso-seguro-com-instalação-do-Certificado-Pessoal-08-16 ",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none"
  },
  "E-mail institucional": {
    "msg": "email",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none"
  },
  "E-mail institucional": {
    "msg": "Desde o inicio de 2020 o IFRS CAMPUS SERTAO disponibiliza o G Suite aos estudantes.",
    "inline":[[{"text":"Voltar"}]],
    "Action":"reply",
    "next":"E-mail2"
  },
  "E-mail2": {
    "msg": "Acesso é via gmail.com",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none",
    "next":"E-mail3"
  },
  "E-mail3": {
    "msg": "O login é o número de matrícula sem símbolos ou zeros é esquerda, como no exemplo:\n202012345@aluno.sertao.ifrs.edu.br",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none",
    "next":"E-mail4"
  },
  "E-mail4": {
    "msg": "A senha do primeiro acesso é o seu CPF",
    "inline":[[{"text":"Voltar"}]],
    "Action":"none"
  },
  "default":{
    "msg": "Eu ainda não tenho uma resposta para essa pergunta 😕",
    "inline": [[{"text":"Voltar"}]],
    "Action":"reply",
    "next":"Voltar"
  }
}', true);

?>
