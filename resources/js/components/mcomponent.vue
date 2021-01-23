<template>

<v-app>
<v-app-bar app>
<v-dialog v-model="resetdialog" persistent width="500">
  <v-card class="pa-4">
   <v-card-title>Сброс пароля</v-card-title>
     <v-card-title>Вход</v-card-title>
     <v-form ref="formpassreset" v-model="valid2">
       <v-card-text>
         <v-text-field v-model="remail" :counter="10" :rules="[rules.required, rules.email]" label="E-mail" required></v-text-field>
       </v-card-text>
       <v-card-actions>     
        <v-btn color="green" @click="do_reset">Отправить ссылку на сброс пароля</v-btn>
      </v-card-actions>
     </v-form>
     </v-card>
</v-dialog>

<!--Диалог процедуры логина-->
<v-dialog v-model="dialog" width="500">
   <v-card class="pa-4">
     <v-card-title>Вход</v-card-title>
     <v-form ref="form" v-model="valid">
      <v-card-text>
      <v-text-field v-model="email" :counter="10" :rules="[rules.required, rules.email]" label="E-mail" required></v-text-field>
      <v-icon>mdi-edit</v-icon>
      <v-text-field v-model="password" :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" :rules="[rules.required, rules.min]"
            :type="show1 ? 'text' : 'password'"
            name="input-10-1"
            label="Пароль"
            hint="Не менее 8 символов"
            counter
            @click:append="show1 = !show1"
          ></v-text-field>
        <v-checkbox
              v-model="remember"
              label="Запомнить"
              color="green"
              hide-details
            ></v-checkbox>
          </v-card-text>
       <v-card-actions>     
        <v-btn color="green" @click="do_login">Вход</v-btn>
        <a href="#" @click="fogot" class="pa-6 text-decoration-underline" >Забыли пароль?</a>
      </v-card-actions>
     </v-form>
   </v-card>
  </v-dialog>
    <!-- -->
    <v-spacer></v-spacer>
    <div v-if="user!=0"> {{user.name}} </div>
    <!--Кнопка логин-->
    <v-btn v-else class="ma-2" outlined color="indigo" @click="dialog=true">Логин</v-btn>  
</v-app-bar>
<v-main>

<div>
  <v-container>
  
    <v-row>
      <v-col>
      <v-card elevation="15">
      <v-card-text>
          <v-select v-model="art" @change="change(0)" :items="arts" item-value="id" item-text="art" label="Артикул" outlined></v-select>
          <v-switch @change="swchange"
            v-model="podbor"
            :label="`Подбор значений: ${switchtext}`"
          ></v-switch>
          <!--Кнопка создания-->
    <v-btn v-if="arts.length==0"  class="ma-2" outlined color="indigo" @click="createpressed">Создать</v-btn>  
      </v-card-text>
      </v-card>
      
      </v-col>
    </v-row>
  
          <v-row>
            <v-col>
                <v-select @change="change(1)" v-model="vprops.name" :items="props.name" item-value="id" item-text="name" label="Наименование" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change(2)" v-model="vprops.spec" :items="props.spec" item-value="id" item-text="name" label="Спецификация" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change(3)" v-model="vprops.thin" :items="props.thin" item-value="id" item-text="name" label="Толщина стенок (мм.)" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change(4)" v-model="vprops.width" :items="props.width" item-value="id" item-text="name" label="Ширина (мм.)" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change(5)" v-model="vprops.vlength" :items="props.vlength" item-value="id" item-text="name" label="Длинна (мм.)" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change(6)" v-model="vprops.height" :items="props.height" item-value="id" item-text="name" label="Высота (мм.)" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change(7)" v-model="vprops.serface" :items="props.serface" item-value="id" item-text="name" label="Покрытие" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change(8)" v-model="vprops.stairs" :items="props.stairs" item-value="id" item-text="name" label="Наличие лестницы" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change(9)" v-model="vprops.insection" :items="props.insection" item-value="id" item-text="name" label="Диаметр врезки (мм.)" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change(10)" v-model="vprops.num_ins" :items="props.num_ins" item-value="id" item-text="name" label="Количество врезок" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change(11)" v-model="vprops.outgo" :items="props.outgo" item-value="id" item-text="name" label="Вытяжка" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change(12)" v-model="vprops.gilz" :items="props.gilz" item-value="id" item-text="name" label="Гильза/муфта" outlined></v-select>
            </v-col>
          </v-row>
    
    </v-row>
  </v-container>
  </div>
  </v-main>
</v-app>
</template>
<script>
import topcomponent from './topcomponent.vue'

  export default {
   props: {
        mainpath: String,
     },
    data () {
      return {
        podbor:false,
         dialog:false,
        resetdialog:false,
        waitlogin:false,
        vprops:{
          name:-1,
          spec:-1,
          thin:-1,
          width:-1,
          vlength:-1,
          height:-1,
          user:false,
          serface:-1,
          stairs:-1,
          insection:-1,
          num_ins:-1,
          outgo:-1,
          gilz:-1,  
        },
        art:-1,
        artikul:'',
        arts:[],
        props:[],
        user:'',
        dialog:false,
        resetdialog:false,
        auth:{id:-1,name:'',email:'',email_verified_at:null,created_at:'',updated_at:''},
        valid:false,
        valid2:false,
        email:'',
        remail:'',
        password:'',
        remember:'',
        show1: false,
        rules: {
          required: value => !!value || 'Обязательное поле!',
          counter: value => value.length <= 20 || 'Максимум 20 символов',
          min: v => v.length >= 8 || 'Минимум 8 символов',
          email: value => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Некорректный e-mail.'
          }
      }
      }
    },
     mounted () {
      this.init()
  },
  computed: {
    switchtext: function() {
      if(this.podbor) return 'по параметрам'
      else return 'по артикулу'
    }
  },
    methods: {
      //Нажатие на конопку создать
      createpressed()
      {
        if(this.user)
          axios.post(this.mainpath+'/creatertikul',{'pr':this.vprops}).then((response) => {
            this.arts = response.data
            this.art = this.arts[this.arts.length-1]
      })
        else
        {
          this.waitlogin = true  //вкл ожидание логина
          this.dialog = true
        }
        
        
      },
      artkeyup()
      {
      
      },
      get_num(arr,k)
      {
      for (var i = 0; i < arr.length; i++) {
          if(arr[i].id==k) return arr[i]
      }
      },
      // изменеие полей
      change(v)
      {
        if(v>0) this.podbor = true
        else this.podbor = false
        this.swchange()
        if(!this.podbor)
          {
            var elem = this.get_num(this.arts,this.art)
            this.vprops.name = elem.name_id
            this.vprops.spec = elem.spec_id
            this.vprops.thin = elem.thin_id
            this.vprops.width = elem.width_id
            this.vprops.vlength = elem.length_id
            this.vprops.height = elem.height_id
            this.vprops.serface = elem.serface_id
            this.vprops.stairs = elem.stairs_id
            this.vprops.insection = elem.insection_id
            this.vprops.num_ins = elem.num_ins_id
            this.vprops.outgo = elem.outgo_id
            this.vprops.gilz = elem.gilz_id
          }
        else
          {
              if(this.vprops.name==-1) this.vprops.name=1
              if(this.vprops.spec==-1) this.vprops.spec=1
              if(this.vprops.thin==-1) this.vprops.thin=1
              if(this.vprops.width==-1) this.vprops.width=1
              if(this.vprops.vlength==-1) this.vprops.vlength=1
              if(this.vprops.height==-1) this.vprops.height=1
              if(this.vprops.serface==-1) this.vprops.serface=1
              if(this.vprops.stairs==-1) this.vprops.stairs=1
              if(this.vprops.insection==-1) this.vprops.insection=1
              if(this.vprops.num_ins==-1) this.vprops.num_ins=1
              if(this.vprops.outgo==-1) this.vprops.outgo=1
              if(this.vprops.gilz==-1) this.vprops.gilz=1
              axios.post(this.mainpath+'/get_arts',{'pr':this.vprops}).then((response) => {
                this.arts = response.data;
                console.log(this.arts.length)
              });
          }
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
                this.dialog = false
                this.init()
                if(this.waitlogin) this.dialogcreate = true
              });
      },
      swchange() //переключатель подбора значений 
      {
       if(!this.podbor) this.init()
      },
       init()
       {
       axios.get(this.mainpath+'/get_art').then((response) => {
          this.arts = response.data;
        });
       axios.get(this.mainpath+'/get_prop').then((response) => {
          this.props = response.data;
        });
       axios.get(this.mainpath+'/get_auth').then((response) => {
          this.user = response.data;
          this.auth = this.user
         // this.dialog = !response.data
        }); 
       }
    },
  }
</script>