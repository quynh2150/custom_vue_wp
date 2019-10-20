<template>
  <section>
    <div v-for="post in posts" :key="post.id" v-html="post.content.rendered"></div>
  </section>
</template>
<script>
export default {
  name: "post",
  data() {
    return {
      posts: []
    };
  },
  methods: {
    getAllPost: async function() {
      this.posts = this.posts;
      const url = wpData.rest_url;

      await this.$axios.get(`${url}/wp/v2/posts`).then(({ data }) => {
        debugger;
        this.posts = data;
        console.table(data)
      });
    }
  },
  async mounted() {
    await this.getAllPost();
  }
};
</script>
