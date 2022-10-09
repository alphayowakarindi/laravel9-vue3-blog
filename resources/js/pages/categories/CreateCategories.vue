<template>
  <div id="create-categories">
    <div id="contact-us">
      <h1>Create New Category!</h1>
      <!-- success message -->
      <div class="success-msg" v-if="success">
        <i class="fa fa-check"></i>
        Category created successfully
      </div>
      <div class="contact-form">
        <form @submit.prevent="submit">
          <label for="name"><span>Name</span></label>
          <input type="text" id="name" v-model="field.name" />
          <span v-if="errors.name" class="error">{{ errors.name[0] }}</span>

          <input type="submit" value="Submit" />
        </form>
      </div>
      <div class="create-categories">
        <router-link :to="{ name: 'CategoriesList' }"
          >Categories List <span>&#8594;</span></router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      field: {},
      errors: {},
      success: false,
    };
  },

  methods: {
    submit() {
      axios
        .post("/api/categories/create", this.field)
        .then(() => {
          this.field = {};
          this.errors = {};
          this.success = true;

          setInterval(() => {
            this.success = false;
          }, 2500);
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>

<style scoped>
#create-categories {
  background-color: #f3f4f6;
  height: 90vh;
  padding: 50px;
}
</style>
