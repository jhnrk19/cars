const{test, expect}= require("@jest/globals")
const checkEmail = require("./checkEmail.js")

test("helyes email cím", ()=>{
    let param={
        fname: "András",
        sname: "Kovács",
        email: "email@kiszolgalo.com",
        message: "Ez egy üzenet"

      }
    let res = checkEmail(param)
    expect(res).toBe(true)
})

test("helytelen keresztnév esetén megfelelő üzenetet dob", ()=>{
    let param={
        fname: "andrás",
        sname: "Kovács",
        email: "email@kiszolgalo.com",
        message: "Ez egy üzenet"

      }
    let res = checkEmail(param)
    expect(res).toBe(false)
})

test("helytelen vezetéknév esetén megfelelő üzenetet dob", ()=>{
    let param={
        fname: "András",
        sname: "kovács",
        email: "email@kiszolgalo.com",
        message: "Ez egy üzenet"

      }
    let res = checkEmail(param)
    expect(res).toBe(false)
})

test("túl rövid üzenet esetén megfelelő üzenetet dob", ()=>{
    let param={
        fname: "andrás",
        sname: "Kovács",
        email: "email@kiszolgalo.com",
        message: "Üzenet"

      }
    let res = checkEmail(param)
    expect(res).toBe(false)
})