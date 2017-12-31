<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

/* Note: This file has been altered by Laborator */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
?>
<div class="product_meta">

<?php do_action( 'woocommerce_product_meta_start' ); ?>

<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Danh Mục:', 'Danh Mục:', $cat_count, 'aurum' ) . ' ', '.</span>' ); ?>

<div id="hotrodathang">
<span>HỖ TRỢ ĐẶT HÀNG</span>
   <div id="hotrodathangdt">
       <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/icon-phone-support.png" style="float: left; margin-right: 10px;">   
       <p>09.35.665.336</p> 
       <p>09.046.090.68</p>
   </div>
<p>Điện thoại: 8:30 - 21:30 (Thứ 2 đến CN)</p>
<p>Địa chỉ: 23/630 Trường Chinh, Ngã Tư Sở, Đống Đa, Hà Nội</p>
</div>

<button class="accordion buttontop">Facebook của Nahasha</button>
<div class="panel">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1037003799654707";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <div class="fb-page" data-href="https://www.facebook.com/Nahasha-620690267967239/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Nahasha-620690267967239/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Nahasha-620690267967239/">Nahasha.com</a></blockquote></div>
 </div>

<button class="accordion">Vận chuyển - Giao Hàng</button>
<div class="panel">
<p><strong>HÀ NỘI:</strong>
<ul>
<li>Miễn phí giao hàng tất cả các Quận nội thành TP.HÀ NỘI với thời gian giao hàng tối đa từ 3h-5h ngay sau khi nhân viên xác nhận đơn hàng của Quý Khách.</li>
<li>Các Quận ngoại thành NAHASHA phụ thu phí giao hàng mỗi đơn hàng là 30.000đ/1 đơn hàng. Quý khách mua 2 sản phẩm trở lên miễn phí giao hàng.</li>
</ul>
<p><strong>CÁC TỈNH THÀNH KHÁC:</strong></p>
<ul>
<li>Miễn phí giao hàng với tất cả các khách hàng chuyển khoản trả trước.</li>
<li>Chuyển COD tới 64 tỉnh thành trong cả nước với cước phí 30.000đ/ 1 sản phẩm.</li>
<li>Miễn phí gửi hàng khi mua từ 2 sản phẩm.</li>
<li>Thời gian giao hàng từ 03-05 ngày làm việc kể từ khi đơn hàng được xác nhận thành công.</li>
<li>Với những yêu cầu đặc biệt gửi hỏa tốc hoặc gửi xe Quý khách vui lòng liên hệ hotline : 0935665336 - 0904609068  (Mọi chi phí vận chuyển theo hình thức này Quý khách tự thanh toán với đối tác vận chuyển).</li>
<li>NAHASHA ký hợp đồng vận chuyển với bưu điện VNPT và Viettel đảm bảo hàng hóa đến tận tay Quý Khách với thời gian ngắn nhất.</li></ul></p>
</div>


<button class="accordion">Chính sách đổi hàng</button>
<div class="panel">
  <p>
<ul>
    <li>Hàng đổi phải còn mới và giữ nguyên tình trạng ban đầu, còn nguyên tem, nhãn mác;</li>
    <li>Hàng chưa qua sử dụng, chưa mở và không bị hư hại.</li>
    <li>Hàng bán trong thời gian khuyến mãi, hoặc hàng đã được đổi một lần trước đó sẽ không áp dụng chính sách đổi trả hàng, trừ trường hợp do lỗi của cửa hàng;</li>
    <li>Giá trị đổi hàng tính theo giá bán thực tế tại thời điểm mua hàng, nhưng phải bằng hoặc cao hơn sản phẩm muốn đổi;</li>
    <li>Nếu quý khách không chọn được sản phẩm nào ưng ý tại thời điêm đổi hàng hoặc sản phẩm mới đổi thấp hơn sản phẩm cũ, NAHASHA sẽ ghi số tiền chênh lệch này thành số tiền đặt cọc của Quý Khách trong lần mua tới (Phiếu đặt cọc có giá trị trong vòng 5 tháng).</li>
</ul>

<strong>ĐỐI VỚI MUA HÀNG ONLINE:</strong>
<ul>
    <li>Khách hàng liên hệ với bộ phận bán hàng Online để xác nhận đơn hàng muốn đổi và được hướng dẫn đổi hàng (không quá 7 ngày kể từ ngày nhận được sản phẩm);</li>
    <li>Hàng chỉ đổi lại khi lỗi do sản phẩm, sai màu, sai dung lượng như khách hàng yêu cầu;</li>
    <li>Khi quý khách muốn đổi lại hàng trong trường hợp không phải do lỗi của NAHASHA, xin vui lòng thanh toán phí vận chuyển.</li>
</ul>
<strong>ĐỐI VỚI MUA HÀNG TẠI CỬA HÀNG:</strong>
<ul>
    <li>Quý khách vui lòng xuất trình hóa đơn mua hàng khi có yêu cầu đổi hàng;</li>
    <li>Với mỗi đơn hàng chỉ được đổi tối đa 01 lần (trừ những trường hợp đặc biệt).</li>
</ul>
</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>