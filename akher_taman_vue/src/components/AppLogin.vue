

<template>
  <!-- Login 13 - Bootstrap Brain Component -->
  <section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="text-center mb-3">
                <a href="#!">
                  <img src="../assets/images/bg/header-logo2.png" alt="BootstrapBrain Logo" width="175" height="57">
                </a>
              </div>
              <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>
              <p class="text-danger" v-if="error">{{ error }}</p>
              <form @submit.prevent="login">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required v-model="form.email">
                      <label for="email" class="form-label">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password"  v-model="form.password" required>
                      <label for="password" class="form-label">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">

                      <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Don't have an account? <router-link to="/register" class="link-primary text-decoration-none">Sign up</router-link></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { reactive, ref } from 'vue'
import axios from 'axios'



export default{
  setup(){
    let form = reactive({
      email: '',
      password: ''
    });

    let error = ref('');

    const login = async() =>{
      await axios.post('http://127.0.0.1:8000/api/login',form).then(res=>{
        if(res.data.success)
        {
            localStorage.setItem('token', res.data.data.token);
        }else
        {
          error.value = res.data.message;
        }
      })
    }

    return{
      form,
      login,
      error
    }
  }
}
</script>


<style scoped>



</style>