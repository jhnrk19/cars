function checkEmail({fname, sname, email, message}){
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))    return false

    if(message.length < 10)                                              return false

    if(fname.length < 3 || !/[A-Z]/.test(fname.charAt(0)))               return false

    if(sname.length < 3 || !/[A-Z]/.test(sname.charAt(0)))               return false


    return true
}

module.exports = checkEmail