const axios = require('axios');

axios
  get('https://ariel.pfregistres.com/apiUnlocked/all/{siren}')
  .then(res => {
    console.log(`statusCode: ${res.status}`);
    console.log(res);
  })
  .catch(error => {
    console.error(error);
  });