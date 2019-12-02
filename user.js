const mongoose = require('mongoose')
const bcrypt = require('bcrypt')

mongoose.connect('mongodb://localhost/alinas', {useUnifiedTopology: true, useNewUrlParser: true, useCreateIndex: true })
.then(() => console.log('connected to MongoDB'))
.catch(err => console.log(`Unable to Connect MongoDB : ${err}`))

const userSchema = new mongoose.Schema({
    name: String,
    username: String, 
    password: String,
    email: String,
    phone: String
});  

// this will hash the user password 
const salt = bcrypt.genSaltSync(10)
const hash = bcrypt.hashSync('password', salt)
console.log('hashed password', hash)
// use the hash to store the hashed password 

async function createUser() {
    const Store = mongoose.model('user', userSchema);
    const store = new Store({
        name: 'Faisal',  // change this hardcoded value with the real input name
        username: 'Faisal-Sha', // change this hardcoded value with the real input name
        password: '123asd', // change this hardcoded value with the real input name
        email: 'abc@gmail.com', // change this hardcoded value with the real input name
        phone: '9980938756' // change this hardcoded value with the real input name
    });
const result = await store.save();
console.log(result);
}

createUser();