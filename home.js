function SubmitBtn(){
    jqery('#SignUp').validate({
        rules:{
            name:"required",
            email:"required",
            phone:"required"
        }
    })
}