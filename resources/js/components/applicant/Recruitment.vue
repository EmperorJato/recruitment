<template>
  <v-form>
    <v-container>
      <h3>Name</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="4">
          <v-text-field outlined label="First Name"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Middle Name"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Last Name"></v-text-field>
        </v-col>
      </v-row>
      <h3>Personal Information</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Phone"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Birth Date"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Email"></v-text-field>
        </v-col>
      </v-row>
      <v-row align="center">
        <v-col cols="12" sm="4">
          <v-select :items="items" label="Marital Status" outlined></v-select>
        </v-col>
        <v-col cols="12" sm="4">
          <v-select :items="items" label="Gender" outlined></v-select>
        </v-col>
      </v-row>
      <h3>School</h3>
      <v-row align="center" justify="center">
        <v-col class="d-flex" cols="12" sm="4">
          <v-select :items="items" label="Latest Educational Attainment" outlined></v-select>
        </v-col>
        <v-col class="d-flex" cols="12" sm="4">
          <v-select :items="items" label="Course" outlined></v-select>
        </v-col>
        <v-col class="d-flex" cols="12" sm="4">
          <v-select :items="items" label="Year Graduated" outlined></v-select>
        </v-col>
      </v-row>
      <h3>Location</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="12">
          <v-textarea outlined name="input-7-4" label="Present Address"></v-textarea>
        </v-col>
        <v-col cols="12" sm="12">
          <v-textarea outlined name="input-7-4" label="Home Address"></v-textarea>
        </v-col>
      </v-row>
      <h3>Work Experience</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="6">
          <v-text-field outlined label="Work"></v-text-field>
        </v-col>
        <v-col cols="12" sm="3">
          <v-select :items="items" label="From" outlined></v-select>
        </v-col>
        <v-col cols="12" sm="3">
          <v-select :items="items" label="To" outlined></v-select>
        </v-col>
      </v-row>
      <h3>Incase of Emergency</h3>
      <v-row align="center" justify="center">
        <v-col cols="12" sm="8">
          <v-text-field outlined label="Person"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-text-field outlined label="Phone"></v-text-field>
        </v-col>
        <v-col cols="12" sm="8">
          <v-text-field outlined label="Address"></v-text-field>
        </v-col>
        <v-col cols="12" sm="4">
          <v-select :items="items" label="Relationship" outlined></v-select>
        </v-col>
      </v-row>
      <v-checkbox label="I hereby certify that all information written are true and correct." color="info" value="" hide-details></v-checkbox>
      <v-row align="center" justify="center">
        <v-btn rounded color="primary" dark>
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
export default {
  data: () => ({
    items: ["Foo", "Bar", "Fizz", "Buzz"]
  })
};
</script>