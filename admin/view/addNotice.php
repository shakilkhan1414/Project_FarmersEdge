
<div class="container">
    <div class="title">Add Notice</div>

    <span id="msg"></span>

    <div class="content">
      <form id="addNotice" onsubmit="return addNoticeProc();" method="post" enctype="multipart/form-data">
        <div class="user-details">
        <div class="input-box content">
            <span class="details">Content</span>
            <textarea name="content" id="content" placeholder="Enter content"></textarea>
          </div>
        </div>
        <div class="last"> 
            <div class="input-box">
                <span class="details">Image</span>
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
