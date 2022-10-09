<template>
  <div id="create-categories">
    <div id="contact-us">
      <h1>Create New Category!</h1>
      <div class="contact-form">
        <form>
          <label for="name"><span>Name</span></label>
          <input type="text" id="name" name="name" />

          <input type="submit" value="Submit" />
        </form>
      </div>
      <div class="create-categories">
        <a href="">Categories list <span>&#8594;</span></a>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
#create-categories {
  background-color: #f3f4f6;
  height: 90vh;
  padding: 50px;
}
</style>
