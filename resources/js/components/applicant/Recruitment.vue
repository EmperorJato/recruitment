<template>
  <form @submit.prevent="create" @keydown="form.onKeydown($event)">
    <v-container>
      <h3>Where did you hear about our vacancy?</h3>
      <v-row>
        <v-col cols="12" sm="12">
          <v-select :items="src1" label="Where" outlined v-model="form.src1" name="src1"></v-select>
        </v-col>
      </v-row>
      <v-row v-if="form.src1 === 'Referred'">
        <v-col cols="12" sm="12">
          <v-text-field outlined label="Who" v-model="form.src2" name="src2" required></v-text-field>
        </v-col>
      </v-row>
      <v-row v-if="form.src1 === 'Others'">
        <v-col cols="12" sm="12">
          <v-text-field outlined label="What" v-model="form.src2" name="src2" required></v-text-field>
        </v-col>
      </v-row>
      <h3>Name</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="4">
          <v-text-field
            outlined
            label="First Name"
            v-model="form.firstname"
            :error-messages="errors.first('firstname')"
            name="firstname"
            v-validate="'required'"
            data-vv-name="firstname"
          ></v-text-field>
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
          <v-text-field
            outlined
            label="Contact"
            v-mask="'####-###-####'"
            v-model="form.phone"
            name="phone"
          ></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-menu
            ref="menu1"
            v-model="menu1"
            :close-on-content-click="false"
            transition="scale-transition"
            offset-y
            max-width="290px"
            min-width="290px"
          >
            <template v-slot:activator="{ on }">
              <v-text-field
                outlined
                v-model="form.birthdate"
                label="Birth Date"
                persistent-hint
                @blur="date = parseDate(form.birthdate)"
                v-on="on"
              ></v-text-field>
            </template>
            <v-date-picker v-model="date" no-title @input="menu1 = false"></v-date-picker>
          </v-menu>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Email" v-model="form.email" name="email"></v-text-field>
        </v-col>
      </v-row>
      <v-row align="center">
        <v-col cols="12" sm="4">
          <v-select
            :items="marital_status"
            label="Marital Status"
            outlined
            v-model="form.marital_status"
            name="marital_status"
          ></v-select>
        </v-col>
        <v-col cols="12" sm="4">
          <v-select :items="gender" label="Gender" outlined v-model="form.gender" name="gender"></v-select>
        </v-col>
      </v-row>
      <h3>School</h3>
      <v-row align="center" justify="center">
        <v-col class="d-flex" cols="12" sm="4">
          <v-select
            :items="educational"
            label="Latest Educational Attainment"
            outlined
            v-model="form.education"
            name="education"
          ></v-select>
        </v-col>
        <v-col
          class="d-flex"
          cols="12"
          sm="4"
          v-if="form.education === 'Senior High School Level' || form.education === 'Senior High School Graduate' || form.education === 'College Level' || form.education === 'College Graduate' || form.education === 'Vocational Course Level' || form.education === 'Vocational Course Graduate' || form.education === 'Post Graduate'"
        >
          <v-text-field label="Course" outlined v-model="form.course" name="course"></v-text-field>
        </v-col>
        <v-col class="d-flex" cols="12" sm="4">
          <v-select
            :items="year"
            label="Year Graduated"
            outlined
            v-model="form.year_graduated"
            name="year_graduated"
          ></v-select>
        </v-col>
      </v-row>
      <h3>Location</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="12">
          <v-textarea
            outlined
            name="present_address"
            label="Present Address"
            v-model="form.present_address"
            :error-messages="errors.first('present_address')"
            v-validate="'required'"
            data-vv-name="present_address"
          ></v-textarea>
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
          <v-select
            :items="year"
            label="From"
            outlined
            v-model="form.experience_from"
            name="experience_from"
          ></v-select>
        </v-col>
        <v-col cols="12" sm="3">
          <v-select
            :items="year"
            label="To"
            outlined
            v-model="form.experience_to"
            name="experience_to"
          ></v-select>
        </v-col>
      </v-row>
      <h3>Incase of Emergency</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="8">
          <v-text-field outlined label="Person" v-model="form.person" name="person"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field
            outlined
            label="Contact"
            v-mask="'####-###-####'"
            v-model="form.person_phone"
            name="person_phone"
          ></v-text-field>
        </v-col>
        <v-col cols="12" sm="8">
          <v-textarea outlined label="Address" v-model="form.person_address" name="person_address"></v-textarea>
        </v-col>
        <v-col cols="12" sm="4">
          <v-select
            :items="relationship"
            label="Relationship"
            outlined
            v-model="form.relationship"
            name="relationship"
          ></v-select>
        </v-col>
      </v-row>
      <v-checkbox
        label="I hereby certify that all information written are true and correct."
        color="info"
        value
        hide-details
      ></v-checkbox>
      <br />
      <v-row align="center" justify="center">
        <v-btn rounded color="primary" dark type="submit">
          <v-icon left>mdi-account</v-icon>Submit
        </v-btn>
      </v-row>
    </v-container>
  </form>
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
import Vue from "vue";
import { Form, HasError, AlertError } from "vform";
import { mask } from "vue-the-mask";
import VeeValidate from "vee-validate";
Vue.use(VeeValidate);
window.form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

export default {
  $_veeValidate: {
    validator: "new"
  },

  directives: {
    mask
  },
  data(vm) {
    return {

      date: new Date().toISOString().substr(0, 10),

      menu1: false,

      items: ["Foo", "Bar", "Fizz", "Buzz"],

      src1: ["Social Media", "Referred", "Job Fair", "Walk-in", "Others"],

      marital_status: [
        { value: 1, text: "Single" },
        { value: 2, text: "Married" }
      ],

      gender: [
        { value: 1, text: "Male" },
        { value: 2, text: "Female" }
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

      year: [],

      relationship: [
        "Child",
        "Friend",
        "Parent",
        "Relative",
        "Sibling",
        "Spouse"
      ],

      form: new Form({
        firstname: "",
        middlename: "",
        lastname: "",
        phone: "",
        birthdate: "",
        email: "",
        gender: "",
        marital_status: "",
        education: "",
        course: "",
        year_graduated: "",
        present_address: "",
        home_address: "",
        work_experience: "",
        experience_from: "",
        experience_to: "",
        person: "",
        person_phone: "",
        person_address: "",
        relationship: ""
      })
    };
  },

  computed: {
    computedDateFormatted() {
      return this.formatDate(this.date);
    }
  },

  watch: {
    date(val) {
      this.form.birthdate = this.formatDate(this.date);
    }
  },

  mounted() {
    this.getYear();
  },

  methods: {
    create() {
      this.$validator.validate().then(valid => {
        
          this.form
        .post("/application")
        .then(response => {
          console.log(response);
        }).catch(this.$el.querySelector('[data-vv-name="' + 
   this.$validator.errors.items[0].field + '"]').scrollIntoView({
     behavior: 'smooth',
     block: 'center',
    inline: 'center'
     }));
              
      });

    },
    formatDate(date) {
      if (!date) return null;

      const [year, month, day] = date.split("-");
      return `${month}/${day}/${year}`;
    },
    parseDate(date) {
      if (!date) return null;

      const [month, day, year] = date.split("/");
      return `${year}-${month.padStart(2, "0")}-${day.padStart(2, "0")}`;
    },

    getYear() {
      let dt = new Date();
      for (let i = dt.getFullYear(); i >= 1930; i--) {
        this.year.push(i);
      }
    }
  }
};
</script>