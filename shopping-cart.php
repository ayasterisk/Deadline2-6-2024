<style>
    .cart {
  width: 50%;
  margin: auto;
  text-align: center;
  padding-top: 30px;
  background-color: aqua;
}
.cart h2 {
  margin-bottom: 20px;
}
.cart table {
  width: 100%;
}
.cart table thead tr th {
  text-align: left;
}
.cart table tr td {
  border-bottom: 1px solid #ddd;
  padding: 12px 0;
}
.cart table thead tr th:last-child {
  text-align: right;
}
.cart table tbody tr td:last-child {
  text-align: right;
}
</style>
<section class="cart">
      <h2>CART</h2>
      <form action="">
        <table>
          <thead>
            <tr>
              <th>Sản phẩm</th>
              <th>Giá</th>
              <th>SL</th>
              <th>Chọn<nav></nav></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="display: flex; align-items: center;" ><img style="width: 70px" src="Image/anh1.jpg" alt="">Sofa</td>
              <td><p><span>2,000,000</span><sup>đ</sup></p></td>
              <td><input style="width: 30px; outline: none;" type="number" value="1" min="1"></td>
              <td style="cursor: pointer;">Xóa</td>
            </tr>
            <tr>
              <td style="display: flex; align-items: center;" ><img style="width: 70px" src="Image/anh1.jpg" alt="">Sofa</td>
              <td><p><span>2,000,000</span><sup>đ</sup></p></td>
              <td><input style="width: 30px; outline: none;" type="number" value="1" min="1"></td>
              <td style="cursor: pointer;">Xóa</td>
            </tr>
          </tbody>
        </table>
        <div style="text-align: right;" class="price-total">
          <p style="font-weight: bold;">Tổng tiền:<span>2,000,000</span><sup>đ</sup></p>
        </div>
      </form>
    </section>


<script src="shopping-cart.js"></script>