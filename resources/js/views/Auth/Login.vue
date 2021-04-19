<template>
  <div class="">
    <div>
      <div style="max-width: 600px" class="mx-auto w-10/12 mt-8 py-32 shadow-2xl">
        <div class="w-full md:w-7/12 mx-auto relative">
            <input required v-model="details.email" name="login" class="text-center text-blue METROPOLISBOLD border-b border-blue w-full focus:outline-none md:text-left md:border-b-2 mx-auto block coolInput" type="text">
            <label for="login" class="coolabel w-full text-center md:text-left">
                <span class="METROPOLISBOLD text-blue md:text-dark">Login</span>
            </label>
            <div class="invalid-feedback" v-if="errors.email">

            </div>
        </div>
        <div class="w-full md:w-7/12 mx-auto relative mt-6">
            <input required v-model="details.password" name="passwd" class="text-center text-blue METROPOLISBOLD border-b border-blue w-full focus:outline-none md:text-left md:border-b-2 mx-auto block coolInput" type="password">
            <label for="passwd" class="coolabel w-full text-center md:text-left">
                <span class="METROPOLISBOLD text-blue md:text-dark">Hasło</span>
            </label>
        </div>
        <div class="text-center mt-12">
          <button @click="login" class="border-blue border-b-2 METROPOLISBOLD px-1 text-dark btn focus:outline-none">Zaloguj</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default{
    data() {
        return {
            details: {
                email: null,
                password: null,
            }
        }
    },
    computed: {
        ...mapGetters(["errors"])
    },
    methods: {
        ...mapActions("auth", ["sendLoginRequest"]),

        login: function () {
            this.sendLoginRequest(this.details)
                .then(() => {
                    this.$router.push({
                        name: "main"
                    });
                    this.$emit("login");
                })
                .catch(() => {
                    alert("Błąd logowania");
                });
        },
    },
    mounted() {
        this.$store.commit("setErrors", {});
    },
}
</script>

<style>

</style>