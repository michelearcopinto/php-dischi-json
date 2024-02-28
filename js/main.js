const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      apiUrl: "server.php",
      discsArray: [],
    };
  },
  created() {
    this.accessLibrary();
  },
  methods: {
    accessLibrary() {
      axios.get(this.apiUrl).then((response) => {
        this.discsArray = response.data;
      });
    },
  },
}).mount("#app");
