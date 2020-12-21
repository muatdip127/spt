<template>
<div>
  <v-container>
  
    <v-row>
      <v-col>
      <v-card elevation="15">
      <v-card-text>
          <v-select v-model="art" @change="change()" :items="arts" item-value="id" item-text="art" label="Артикул" outlined></v-select>
          <v-switch @change="swchange"
            v-model="podbor"
            :label="`Подбор значений: ${switchtext}`"
          ></v-switch>
      </v-card-text>
      </v-card>
      
      </v-col>
    </v-row>
  
          <v-row>
            <v-col>
                <v-select @change="change()" v-model="vprops.name" :items="props.name" item-value="id" item-text="name" label="Наименование" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change()" v-model="vprops.spec" :items="props.spec" item-value="id" item-text="name" label="Спецификация" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change()" v-model="vprops.thin" :items="props.thin" item-value="id" item-text="name" label="Толщина стенок (мм.)" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change()" v-model="vprops.width" :items="props.width" item-value="id" item-text="name" label="Ширина (мм.)" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change()" v-model="vprops.vlength" :items="props.vlength" item-value="id" item-text="name" label="Длинна (мм.)" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change()" v-model="vprops.height" :items="props.height" item-value="id" item-text="name" label="Высота (мм.)" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change()" v-model="vprops.serface" :items="props.serface" item-value="id" item-text="name" label="Покрытие" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change()" v-model="vprops.stairs" :items="props.stairs" item-value="id" item-text="name" label="Наличие лестницы" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change()" v-model="vprops.insection" :items="props.insection" item-value="id" item-text="name" label="Диаметр врезки (мм.)" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change()" v-model="vprops.num_ins" :items="props.num_ins" item-value="id" item-text="name" label="Количество врезок" outlined></v-select>
            </v-col>
          </v-row>
          <v-row>
            <v-col>
                <v-select @change="change()" v-model="vprops.outgo" :items="props.outgo" item-value="id" item-text="name" label="Вытяжка" outlined></v-select>
            </v-col>
            <v-col>
                <v-select @change="change()" v-model="vprops.gilz" :items="props.gilz" item-value="id" item-text="name" label="Гильза/муфта" outlined></v-select>
            </v-col>
          </v-row>
    
    </v-row>
  </v-container>
  </div>
</template>
<script>
  export default {
  props: {
        mainpath: String,
     },
    data () {
      return {
        podbor:false,
        vprops:{
          name:-1,
          spec:-1,
          thin:-1,
          width:-1,
          vlength:-1,
          height:-1,
          serface:-1,
          stairs:-1,
          insection:-1,
          num_ins:-1,
          outgo:-1,
          gilz:-1,  
        },
        art:-1,
        arts:[],
        props:[],
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
      get_num(arr,k)
      {
      for (var i = 0; i < arr.length; i++) {
          if(arr[i].id==k) return arr[i]
      }
      },
      change()
      {
        
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
              });
          }
      },
      swchange()
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
       }
    },
  }
</script>