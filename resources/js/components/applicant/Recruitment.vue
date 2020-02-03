<template>
  <v-form @submit.prevent="create" @keydown="form.onKeydown($event)">
    <v-container>
      <h3>Name</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="4">
          <v-text-field outlined label="First Name" v-model="form.firstname" name="firstname" required></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Middle Name" v-model="form.middlename" name="middlename"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Last Name" v-model="form.lastname" name="lastname"></v-text-field>
        </v-col>
      </v-row>
      <h3>Personal Information</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Phone" v-model="form.phone" name="phone"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Birth Date" v-model="form.birthdate" name="birthdate"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Email" v-model="form.email" name="email"></v-text-field>
        </v-col>
      </v-row>
      <v-row align="center">
        <v-col cols="12" sm="4">
          <v-select :items="marital_status" label="Marital Status" outlined v-model="form.marital_status" name="marital_status"></v-select>
        </v-col>
        <v-col cols="12" sm="4">
          <v-select :items="gender" label="Gender" outlined v-model="form.gender" name="gender"></v-select>
        </v-col>
      </v-row>
      <h3>School</h3>
      <v-row align="center" justify="center">
        <v-col class="d-flex" cols="12" sm="4">
          <v-select :items="educational" label="Latest Educational Attainment" outlined v-model="form.education" name="education"></v-select>
        </v-col>
        <v-col class="d-flex" cols="12" sm="4">
          <v-select :items="items" label="Course" outlined v-model="form.course" name="course"></v-select>
        </v-col>
        <v-col class="d-flex" cols="12" sm="4">
          <v-select :items="items" label="Year Graduated" outlined v-model="form.year_graduated" name="year_graduated"></v-select>
        </v-col>
      </v-row>
      <h3>Location</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="12">
          <v-textarea outlined name="present_address" label="Present Address" v-model="form.present_address"></v-textarea>
        </v-col>
        <v-col cols="12" sm="12">
          <v-textarea outlined name="home_address" label="Home Address" v-model="form.home_address"></v-textarea>
        </v-col>
      </v-row>
      <h3>Work Experience</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="6">
          <v-text-field outlined label="Work" v-model="form.work_experience" name="work_experience"></v-text-field>
        </v-col>
        <v-col cols="12" sm="3">
          <v-select :items="items" label="From" outlined v-model="form.experience_from" name="experience_from"></v-select>
        </v-col>
        <v-col cols="12" sm="3">
          <v-select :items="items" label="To" outlined v-model="form.experience_to" name="experience_to"></v-select>
        </v-col>
      </v-row>
      <h3>Incase of Emergency</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="8">
          <v-text-field outlined label="Person" v-model="form.person" name="person"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Phone" v-model="form.person_phone" name="person_phone"></v-text-field>
        </v-col>
        <v-col cols="12" sm="8">
          <v-text-field outlined label="Address" v-model="form.person_address" name="person_address"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-select :items="items" label="Relationship" outlined v-model="form.relationship" name="relationship"></v-select>
        </v-col>
      </v-row>
      <v-checkbox
        label="I hereby certify that all information written are true and correct."
        color="info"
        value
        hide-details
      ></v-checkbox>
      <v-row align="center" justify="center">
        <v-btn rounded color="primary" dark type="submit">
          <v-icon left>mdi-account</v-icon>Submit
        </v-btn>
      </v-row>
    </v-container>
  </v-form>
</template>

<style lang="scss">
.v-application {
  font-family: "Roboto", sans-serif;
  line-height: 1.5;
  font-weight: 700;
}

.theme--light.v-application {
  background: none;
  color: #000000 !important;
}
</style>

<script>
import Vue from 'vue';
import { Form, HasError, AlertError } from 'vform';
window.form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

export default {

    data () {
    return {
      items: ['Foo', 'Bar', 'Fizz', 'Buzz'],
          marital_status: [
      { value : 1, text : "Single"},
      { value : 2, text : "Married"}
      ],

    gender: [
      { value : 1, text : "Male"},
      { value : 2, text : "Female"}
      ],

    educational: [
      "Elementary Level",
      "Elementary Graduate",
      "High School Level",
      "High School Graduate",
      "Senior High School Level",
      "Senior High School Graduate",
      "College Level",
      "College Graduate",
      "Vocational Course Level",
      "Vocational Course Graduate",
      "Post Graduate"
    ],

      form: new Form({
        firstname: '',
        middlename: '',
        lastname: '',
        phone: '',
        birthdate: '',
        email: '',
        gender: '',
        marital_status: '',
        education: '',
        course: '',
        year_graduated: '',
        present_address: '',
        home_address: '',
        work_experience: '',
        experience_from: '',
        experience_to: '',
        person: '',
        person_phone: '',
        person_address: '',
        relationship: ''
      })
    }
  },
  
  //  data: () => ({

  //   valid : true,
  //   fname : '',
  //   fnameRules : [
  //     v => !!v || 'Name is required',
  //   ],

  //   items: ['Foo', 'Bar', 'Fizz', 'Buzz'],


  //   }),

  methods: {
    create() {
      this.form.post("/application").then(({ data }) => {
        console.log(data);
      });
    }
  }
};
</script>