
<div class="container">
    <div class="title">Add Product</div>

    <span id="msg"></span>

    <div class="content">
      <form id="addProduct" onsubmit="return addProductproccess();" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product Name</span>
            <input type="text" name="name" id="name" placeholder="Enter product name" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Product Owner</span>
            <input type="text" placeholder="Enter product owner" name="owner" id="owner" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Quantity</span>
            <input type="text" placeholder="Enter product quantity" name="quantity" id="quantity" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Price</span>
            <input type="text" placeholder="Enter product price" name="price" id="price" autocomplete="off">
          </div>
        </div>
        <div class="user-details">
        <div class="input-box content">
            <span class="details">Description</span>
            <textarea name="descripion" id="descripion" placeholder="Enter product descripion"></textarea>
          </div>
        </div>
        <div class="last"> 
            <div class="input-box">
                <span class="details">Product Image</span>
                <input type="file" name="image" id="image">
            </div>
        </div>
        <div class="button">
          <input type="submit" value="Add">
        </div>
      </form>
    </div>
  </div>

  <style>
      form .user-details .input-box.content{
        width: 100%;
      }
      form .user-details .input-box textarea{
        height: 120px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 10px;
        padding-left: 15px;
        border: 1px solid #150338;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        resize: none;
      }

  </style>
