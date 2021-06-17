const express = require('express');
const router = express.Router();

router.all('*', async function(req,res,next){
    if(DatabaseStatus == true) return next();

    res.render('error', { statusCode: 500, message: 'Bir sorunla karşılaştık. Lütfen daha sonra tekrar deneyin.'});
});

router.get('/', async function(req,res){
    return res.render('index');
});

module.exports = router;