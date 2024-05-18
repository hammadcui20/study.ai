<form class="d-flex bg-transparent w-100" action="{{url('searchProduct')}}" class="form-control" method="POST">
                  @csrf
                  <div class="input-group">
                     <input name="product_name" required type="search" id="search_product" class="form-control text_green rounded-pill "  placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                     <button class="btn text_green" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
               </form>
