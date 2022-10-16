<template>
  <div class="categories-list">
    <h1>Categories List</h1>
    <!-- success message -->
    <div class="success-msg" v-if="success">
      <i class="fa fa-check"></i>
      Deleted successfully
    </div>
    <div
      class="item"
      v-for="(category, index) in categories"
      :key="category.id"
    >
      <span>{{ index + 1 }}</span>
      <p>{{ category.name }}</p>
      <div>
        <router-link
          class="edit-link"
          :to="{ name: 'EditCategories', params: { id: category.id } }"
          >Edit</router-link
        >
      </div>

      <input
        type="button"
        value="Delete"
        @click="destroy(category.id)"
        class="delete-btn"
      />
    </div>
    <div class="index-categories">
      <router-link :to="{ name: 'CreateCategories' }"
        >Create Categories<span>&#8594;</span></router-link
      >
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: [],
      success: false,
    };
  },

  methods: {
    destroy(id) {
      axios
        .delete("/api/categories/" + id)
        .then((response) => {
          this.success = true;
          setInterval(() => {
            this.success = false;
          }, 2500);
          this.fetchCategories();
        })
        .catch((error) => {
          console.log(error);
        });
    },
    fetchCategories() {
      axios
        .get("/api/categories")
        .then((response) => (this.categories = response.data))
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    this.fetchCategories();
  },
};
</script>

<style scoped>
.categories-list {
  min-height: 100vh;
  background: #fff;
}

.categories-list h1 {
  font-weight: 300;
  padding: 50px 0 30px 0;
  text-align: center;
}

.categories-list .item {
  display: flex;
  justify-content: right;
  align-items: center;
  max-width: 300px;
  margin: 0 auto !important;
}

.categories-list .item p {
  font-size: 16px;
}

.categories-list .item p,
.categories-list .item div,
.categories-list .item {
  margin: 15px 8px;
}

.categories ul li {
  list-style: none;
  background-color: #494949;
  margin: 20px 5px;

  border-radius: 15px;
}

.categories ul {
  display: flex;
  justify-content: center;
}

.categories a {
  color: white;
  padding: 10px 20px;
  display: inline-block;
}

.create-categories a,
.index-categories a {
  all: revert;
  margin: 20px 0;
  display: inline-block;
  text-decoration: none;
}

.create-categories a span,
.index-categories a span {
  font-size: 22px;
}

.index-categories {
  text-align: center;
}
</style>