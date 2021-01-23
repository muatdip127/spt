<template>

  
</template>
<script>
  export default {
  props: {
        mainpath: String,
        
     },
    data () {
      return { 
        user:'',
        dialog:false,
        resetdialog:false,
       
        
        valid:false,
        valid2:false,
        email:'',
        remail:'',
        password:'',
        remember:'',
        show1: false,
        rules: {
          required: value => !!value || 'Required.',
          counter: value => value.length <= 20 || 'Максимум 20 символов',
          min: v => v.length >= 8 || 'Минимум 8 символов',
          email: value => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Некорректный e-mail.'
          }
      }
      }},
       mounted () {
      this.init()
  },
  computed: {
    
  },
    methods: {
    do_Auth: function() {
    
        $('#auth').val(1)
  },
      do_reset()
      {
      
      },
      fogot()
      {
        this.dialog= false
        this.resetdialog = true
      },
      do_login()
      {
        if(this.remember) var data = {'_token':$('meta[name="csrf-token"]').attr('content'),'email':this.email,'password':this.password, 'remember':'on'}
        else var data = {'_token':$('meta[name="csrf-token"]').attr('content'),'email':this.email,'password':this.password}
        axios.post(this.mainpath+'/login',data).then((response) => {
                this.init()
                this.do_Auth()
              });
      },
       init()
       {
       axios.get(this.mainpath+'/get_auth').then((response) => {
          this.user = response.data;
          this.auth = this.user
         // this.dialog = !response.data
        });
       
       }
    },
  }
</script>