<template>
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <li class="nav-item active">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item active mt-auto"> <!-- Add mt-auto class to move the button to the bottom -->
        <button type="button" class="btn btn-dark mt-2" @click="logout">Logout</button>
      </li>
    </ul>


    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>



          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle text-white" style="background: #f9395f;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  profile
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                                                                       href="https://datatables.net">official DataTables documentation</a>.</p>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Products</h6>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" style="background: #f9395f; border: none;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Product
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: start;">
                      <form>
                        <div class="mb-3">
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="exampleInputEmail1"></textarea>
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="exampleInputEmail1"></textarea>
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="form-floating">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1" class="form-label">Start Price</label>
                          </div>
                        </div>
                        <div class="mb-2">
                          <div class="form-floating">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1" class="form-label">current price</label>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <select class="form-control" id="inputGroupSelect01">
                            <option selected>Condition</option>
                            <option value="1">New</option>
                            <option value="2">Used</option>
                            <option value="3">Very Old</option>
                          </select>
                        </div>

                        <div class="input-group mb-3">
                          <select class="form-control" id="inputGroupSelect01">
                            <option selected>Condition</option>
                            <option value="1">New</option>
                            <option value="2">Used</option>
                            <option value="3">Very Old</option>
                          </select>
                        </div>

                        <div class="mb-2">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1" class="form-label">Location</label>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Discription</th>
                    <th>start price</th>
                    <th>current price</th>
                    <th>Category</th>
                    <th>condition</th>
                    <th>Location</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th>Title</th>
                    <th>Discription</th>
                    <th>start price</th>
                    <th>current price</th>
                    <th>Category</th>
                    <th>condition</th>
                    <th>Location</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                  <tbody>
                    <tr v-for="product in products" :key="product.id">
                      <td>{{product.title}}</td>
                      <td>{{ product.description }}</td>
                      <td>{{ product.price }}</td>
                      <td>{{ product.starting_price }}</td>
                      <td>{{ product.current_price }}</td>
                      <td>{{ product.category }}</td>
                      <td>{{ product.condition }}</td>
                      <td>{{ product.location }}</td>
                      <td>{{ product.status }}</td>
                      <td>
                        <form style="cursor:pointer;" >
                          <div>
                            <button type="button" class="btn text-white" style="background: #f9395f" data-toggle="modal" @click="deleteProduct(product.id)">
                              <i class="bi bi-trash3"></i>
                            </button>

                          </div>
                        </form>
                        <form style="cursor:pointer;">
                          <i class="bi bi-pencil-square"></i>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
    </div>

  </div>
</template>

<script setup>
import { useRouter } from 'vue-router';
import { useStore } from "vuex";
import { ref } from "vue";

const router = useRouter();
const store = useStore();

const products = ref([]);

  async function fetchProducts() {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/products');
      const data = await response.json();
      // Update products ref directly
      products.value = data;
    } catch (error) {
      console.error('Error fetching products:', error);
    }
  }
  async function deleteProduct(id) {
    if (confirm('Are you sure you want to delete this product?')) {
      try {
        const response = await fetch(`http://127.0.0.1:8000/api/products/${id}`, {
          method: 'DELETE'
        });
        if (response.ok) {
          fetchProducts();
        } else {
          console.log('Response not OK');
        }
      } catch (error) {
        console.error('Error deleting product:', error);
      }
    }
  }


fetchProducts();

function logout() {
  store.dispatch('removeToken');
  router.push({ name: 'Home' });
}
</script>


<style scoped>

.bg-gradient-primary
{
  background: #f9395f;
}
</style>
