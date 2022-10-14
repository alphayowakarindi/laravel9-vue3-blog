<template>
  <main class="create-post">
    <div class="container">
      <h1>Create Posts!</h1>

      <!-- Contact Form -->
      <div class="contact-form">
        <form>
          <!-- Title -->
          <label for="title"><span>Title</span></label>
          <input type="text" id="title" name="title" />
          <br />

          <!-- Image -->
          <label for="image"><span>Image</span></label>
          <input type="file" id="image" />
          <br />

          <!-- Drop down -->
          <label for="categories"><span>Choose a category:</span></label>
          <select name="category_id" id="categories">
            <option selected disabled>Select option</option>
            <option value="">Category 1</option>
            <option value="">Category 2</option>
            <option value="">Category 3</option>
          </select>
          <br />

          <!-- Body-->
          <label for="body"><span>Body</span></label>
          <textarea id="body" name="body"></textarea>

          <!-- Button -->
          <input class="add-post-btn" type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </main>
</template>

<script>
export default {};
</script>

<style scoped>
.create-post {
  background-color: #fff;
  padding: 0 3vw;
}
.container input,
textarea,
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 20px;
  font-size: 16px;
}
h1 {
  text-align: center;
  padding: 60px 0 50px 0;
}

.add-post-btn {
  background-color: black;
  color: white;
  border: none;
  cursor: pointer;
  transition: 0.3s ease;
}

.add-post-btn:hover {
  transform: translateY(-4px);
}
</style>