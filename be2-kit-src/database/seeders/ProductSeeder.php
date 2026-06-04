<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'iPhone 17 Pro 256GB',
            'price' => 1000,
            'description' => '<div class="sc-34e0efdc-0 dSZwVn"><div class="sc-34e0efdc-1 ddClVB">Mô tả sản phẩm</div><div class="sc-6127f691-0 jGQAXd content"><div class="sc-f5219d7f-1 jBwezC"><div class="sc-f5219d7f-0 haxTPb"><p><img src="https://salt.tikicdn.com/ts/tmp/49/0a/d1/040d8fb0d9d4aca9b48a76a2ba3970ea.png" alt="" width="750" height="1932"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div></div></div></div>',
            'photo' => 'iphone17.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 13',
            'price' => 1000,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>iPhone 13. Hệ thống camera kép tiên tiến nhất từng có trên iPhone. Chip A15 Bionic thần tốc. Bước nhảy vọt về thời lượng pin. Thiết kế bền bỉ. Mạng 5G siêu nhanh.<sup>1</sup> Cùng với màn hình Super Retina XDR sáng hơn.</p>
            ',
            'photo' => 'iphone13.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 14 Pro',
            'price' => 400,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="">
            <p>iPhone 14 Pro. Bắt trọn chi tiết ấn tượng với Camera Chính 48MP. Trải nghiệm iPhone theo cách hoàn toàn mới với Dynamic Island và màn hình Luôn Bật. Phát Hiện Va Chạm,<sup>1</sup>&nbsp;một tính năng an toàn mới, thay bạn gọi trợ giúp khi cần kíp.</p>
            <h3>Tính năng nổi bật</h3>
            <ul><li>Màn hình Super Retina XDR 6,1 inch<sup>2</sup>&nbsp;với tính năng Luôn Bật và ProMotion</li>
            <li>Dynamic Island, một cách mới tuyệt diệu để tương tác với iPhone</li>
            <li>Camera Chính 48MP cho độ phân giải gấp 4 lần</li>
            <li>Chế độ Điện Ảnh nay đã hỗ trợ 4K Dolby Vision tốc độ lên đến 30 fps</li>
            <li>Chế độ Hành Động để quay video cầm tay mượt mà, ổn định</li>
            <li>Công nghệ an toàn quan trọng – Phát Hiện Va Chạm1 thay bạn gọi trợ giúp khi cần kíp</li>
            <li>Thời lượng pin cả ngày và thời gian xem video lên đến 23 giờ<sup>3</sup></li>
            <li>A16 Bionic, chip điện thoại thông minh tuyệt đỉnh. Mạng di động 5G siêu nhanh<sup>4</sup></li>
            <li>Các tính năng về độ bền dẫn đầu như Ceramic Shield và khả năng chống nước<sup>5</sup></li>
            <li>iOS 16 đem đến thêm nhiều cách để cá nhân hóa, giao tiếp và chia sẻ<sup>6</sup></li>
            </ul><h3>Pháp lý</h3>
            <p><sup>1</sup>SOS Khẩn Cấp sử dụng kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.<br><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình theo đường chéo là 6,12 inch.<br>Diện tích hiển thị thực tế nhỏ hơn.<br><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập apple.com/batteries để biết thêm thông tin.<br><sup>4</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. Để biết thông tin về hỗ trợ mạng 5G, vui lòng liên hệ nhà mạng và truy cập apple.com/iphone/cellular.<br><sup>5</sup>iPhone 14 Pro có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.<br><sup>6</sup>Một số tính năng không khả dụng tại một số quốc gia hoặc khu vực.</p>
            <h3>Thông số kỹ thuật</h3>
            <p>Truy cập&nbsp;<a href="apple.com/iphone/compare" rel="nofollow noreferrer">apple.com/iphone/compare</a></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'iphone14pro.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 14 Plus',
            'price' => 1400,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="">
            <p>iPhone 14 Plus. Nghĩ lớn cùng màn hình 6,7 inch lớn hơn<sup>1</sup> và thời lượng pin bền bỉ cả ngày.<sup>2</sup> Chụp những bức ảnh tuyệt đẹp trong điều kiện thiếu sáng và dư sáng cùng hệ thống camera kép mới. Phát Hiện Va Chạm,<sup>3</sup> một tính năng an toàn mới, thay bạn gọi trợ giúp khi cần kíp.</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>Màn hình Super Retina XDR 6,7 inch<sup>1</sup></li>
            <li>Hệ thống camera tiên tiến cho chất lượng ảnh đẹp hơn trong mọi điều kiện ánh sáng</li>
            <li>Chế độ Điện Ảnh nay đã hỗ trợ 4K Dolby Vision tốc độ lên đến 30 fps</li>
            <li>Chế độ Hành Động để quay video cầm tay mượt mà, ổn định</li>
            <li>Công nghệ an toàn quan trọng - Phát Hiện Va Chạm<sup>3</sup> thay bạn gọi trợ giúp khi cần kíp.</li>
            <li>Thời lượng pin cả ngày và thời gian xem video lên đến 26 giờ<sup>2</sup></li>
            <li>Chip A15 Bionic với GPU 5 lõi để đạt hiệu suất siêu nhanh. Mạng di động 5G siêu nhanh<sup>4</sup></li>
            <li>Các tính năng về độ bền dẫn đầu như Ceramic Shield và khả năng chống nước<sup>5</sup></li>
            <li>iOS 16 đem đến thêm nhiều cách để cá nhân hóa, giao tiếp và chia sẻ<sup>6</sup></li>
            </ul>
            <h3>Pháp lý</h3>
            <p><sup>1</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật chuẩn, kích thước màn hình theo đường chéo là 6,68 inch. Diện tích hiển thị thực tế nhỏ hơn.</p>
            <p><sup>2</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập <a href="http://apple.com/batteries" rel="nofollow noreferrer">apple.com/batteries</a> để biết thêm thông tin.</p>
            <p><sup>3</sup>SOS Khẩn Cấp sử dụng kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.</p>
            <p><sup>4</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. <a href="http://apple.com/iphone/cellular" rel="nofollow noreferrer">Để biết thông tin về hỗ trợ mạng 5G, vui lòng liên hệ nhà mạng và truy cập apple.com/iphone/cellular</a>.</p>
            <p><sup>5</sup>iPhone 14 Plus có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p>
            <p><sup>6</sup>Một số tính năng không khả dụng tại một số quốc gia hoặc khu vực.</p>
            <h3>Thông số kỹ thuật</h3>
            <p>Truy cập <a href="https://www.apple.com/iphone/compare/" rel="nofollow noreferrer">apple.com/iphone/compare</a></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'iphone14plus.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 15 Pro Max',
            'price' => 900,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="">
            <p>Giờ đây với thiết kế titan nhẹ và bền chắc, cùng chip A17 Pro cho khả năng đa nhiệm khủng. Bắt trọn những khoảnh khắc đặc biệt khi đang di chuyển với hệ thống camera chuyên nghiệp linh hoạt hơn. Và một bước nhảy vọt về tốc độ truyền dữ liệu với USB-C cùng chuẩn USB 3.</p>
            <p>&nbsp;</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>ĐƯỢC ĐÚC TỪ TITAN&nbsp;— iPhone 15 Pro Max sở hữu thiết kế titan chuẩn hàng không vũ trụ, nhẹ và bền chắc với mặt sau bằng kính nhám. Mặt trước Ceramic Shield bền chắc hơn mọi mặt kính điện thoại thông minh. Và có khả năng chống tia nước, chống nước và chống bụi.<sup>1</sup></li>
            <li>MÀN HÌNH TIÊN TIẾN — Màn hình Super Retina XDR 6,7"<sup>2</sup> với ProMotion tăng tốc độ làm mới lên đến 120Hz khi bạn cần đến hiệu năng đồ họa vượt trội. Dynamic Island hiển thị linh động các cảnh báo và Hoạt Động Trực Tiếp. Đồng thời, với màn hình Luôn Bật, Màn Hình Khóa của bạn luôn hiển thị, nên bạn thậm chí không cần chạm vào màn hình để cập nhật thông tin.</li>
            <li>CHIP A17 PRO THAY ĐỔI CUỘC CHƠI — GPU đẳng cấp Pro đem tới đồ họa mượt mà hơn cùng ánh sáng chân thực dành cho môi trường có độ chi tiết cao. CPU nhanh hơn xử lý những khối lượng công việc phức tạp và các ứng dụng kinh doanh một cách dễ dàng. A17 Pro có khả năng tiết kiệm năng lượng ấn tượng, mang đến thời lượng pin cả ngày tuyệt vời, giúp bạn thoải mái dùng cho công việc khi đang di chuyển.<sup>3</sup></li>
            <li>HỆ THỐNG CAMERA PRO MẠNH MẼ — Sở hữu khung hình linh hoạt đáng kinh ngạc với 7 ống kính chuyên nghiệp. Chụp ảnh có độ phân giải siêu cao với nhiều màu sắc và chi tiết hơn bằng camera Chính 48MP. Và chụp ảnh cận cảnh sắc nét hơn từ khoảng cách xa hơn với camera Telephoto 5x trên iPhone 15 Pro Max.</li>
            <li>NÚT TÁC VỤ CÓ THỂ TÙY CHỈNH — Nút Tác Vụ là cách nhanh chóng đến tính năng yêu thích của bạn. Chỉ cần đặt thành một tác vụ bạn muốn, chẳng hạn chế độ Im Lặng, Camera, Ghi Âm hoặc Phím Tắt và nhiều tác vụ khác. Sau đó nhấn và giữ để khởi chạy tác vụ đó.</li>
            <li>KẾT NỐI PRO — Cổng kết nối USB-C mới cho phép bạn sạc máy Mac hoặc iPad bằng cùng cáp sạc với iPhone 15 Pro Max. Với USB 3, bạn sẽ thấy bước nhảy vọt về tốc độ truyền dữ liệu.<sup>4</sup> Và bạn có thể tải xuống tập tin nhanh hơn đến 2x bằng Wi-Fi 6E.<sup>5</sup></li>
            <li>CÁC TÍNH NĂNG AN TOÀN QUAN TRỌNG — Với tính năng Phát Hiện Va Chạm, iPhone có thể phát hiện va chạm ô tô nghiêm trọng và gọi trợ giúp khi cần kíp.<sup>6</sup></li>
            <li>ĐƯỢC THIẾT KẾ ĐỂ TẠO NÊN KHÁC BIỆT — iPhone trang bị các biện pháp bảo vệ quyền riêng tư, cho bạn quyền kiểm soát dữ liệu của mình. iPhone được làm từ nhiều vật liệu tái chế hơn để giảm thiểu tác động tới môi trường. Và được tích hợp những tính năng giúp iPhone dễ sử dụng hơn cho tất cả mọi người.</li>
            <li>ĐI KÈM VỚI BẢO HÀNH APPLECARE — Mỗi iPhone đều được bảo hành giới hạn trong một năm và hỗ trợ kỹ thuật miễn phí trong tối đa 90 ngày. Mua AppleCare+ để kéo dài thời hạn bảo hành.
            <ul>
            <li>&nbsp;</li>
            </ul>
            </li>
            </ul>
            <h3>Pháp lý</h3>
            <p><sup>1</sup>iPhone 15, iPhone 15 Plus, iPhone 15 Pro và iPhone 15 Pro Max có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.&nbsp;</p>
            <p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật chuẩn, kích thước màn hình theo đường chéo là 6,12 inch (iPhone&nbsp;15&nbsp;Pro, iPhone&nbsp;15) hoặc 6,69 inch (iPhone&nbsp;15&nbsp;Pro&nbsp;Max, iPhone&nbsp;15&nbsp;Plus). Diện tích hiển thị thực tế nhỏ hơn.</p>
            <p><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập  để biết thêm thông tin.</p>
            <p><sup>4</sup>Yêu cầu cáp USB 3 với tốc độ 10Gb/s để đạt tốc độ truyền nhanh hơn đến 20x trên các phiên bản iPhone 15 Pro.</p>
            <p><sup>5</sup>Wi-Fi 6E khả dụng tại các quốc gia và khu vực có hỗ trợ.</p>
            <p><sup>6</sup>iPhone 15 và iPhone 15 Pro có thể phát hiện va chạm ô tô nghiêm trọng và gọi trợ giúp. Yêu cầu kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.</p>
            <p>&nbsp;</p>
            <h3>Thông số kỹ thuật</h3>
            <p>Truy cập  để xem cấu hình đầy đủ.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'iphone15promax.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Điện thoại Samsung Galaxy S23 5G (8GB/256GB) - Hàng chính hãng',
            'price' => 800,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Cảm hứng từ muôn sắc màu thiên nhiên</h3>
            <p>Gặp gỡ muôn sắc màu thiên nhiên trên<strong> Samsung Galaxy S23 5G</strong>, bạn sẽ ngạc nhiên vì nét đẹp cuốn hút này. Nét đẹp khó nhầm lẫn với bất kỳ đại diện nào.</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/b2/04/9d/7debb17e5283afcbd55a5cac50a7cd59.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/b2/04/9d/7debb17e5283afcbd55a5cac50a7cd59.jpg" alt="" width="750" height="466"></p>
            <p>Các sắc màu thể hiện rõ tuyên ngôn bền vững của Samsung trong dòng&nbsp;Galaxy S&nbsp;năm nay, các màu tươi mới từ thiên nhiên nhưng vẫn rất trendy, mang đến sức sống tràn đầy cảm hứng cho lớp vỏ kim loại cao cấp và sẵn sàng dẫn đầu xu hướng, bao gồm: Kem Cotton, Xanh Botanic, Tím Lilac và Đen Phantom.</p>
            <h3>Nét đẹp từ thiết kế bền vững</h3>
            <p>Tinh túy thiết kế Samsung S23 còn là nét đẹp của sự bền vững và thân thiện môi trường.&nbsp;Samsung&nbsp;đã sử dụng linh kiện từ vật liệu tái chế trên Galaxy S23 nhiều hơn bất kỳ chiếc Galaxy nào trước đây. Mở hộp Samsung Galaxy S23 là chất liệu kính và lớp phim phủ PET tái chế, màu nhuộm nguồn gốc thiên nhiên và bao bì màng bảo vệ từ giấy tái chế. Đây chính là chiếc smartphone người dùng đang tìm kiếm, vừa thông minh, vượt trội lại vừa thân thiện bởi chất liệu tinh tế, hướng đến sự bền vững từ ngoài vào trong. Một vẻ đẹp&nbsp;vì môi trường và vì người dùng, một trọng tâm phát triển xanh đáng trân quý. Đây cũng là cách mà Galaxy S23 có thể đóng góp xây dựng một tương lai tốt đẹp hơn.</p>
            <h3>Bắt trọn mọi khung hình dù ngày hay đêm</h3>
            <p>Dù ngày hay đêm, dù đủ sáng hay thiếu sáng, góc thường hay góc rộng, camera Samsung Galaxy S23 vẫn hoàn thành tròn nhiệm vụ với chất lượng sắc nét và đẳng cấp trong từng chi tiết. Trọn bộ đột phá này gói gọn trong hệ thống 4 camera vượt trội, bao gồm camera góc rộng 50MP, camera góc siêu rộng 12MP, camera tele 10MP (zoom quang 3x, zoom kỹ thuật số 30x) và camera selfie 12MP. Trong tay bộ tứ camera chuyên nghiệp với cảm biến điểm ảnh thông minh, điểm ảnh thu sáng tốt và nhạy hơn, mọi nét của bạn đều tỏa sáng hay mọi phong cảnh đều tuyệt đẹp như mong muốn.</p>
            <h3>Ảnh đêm rực nét – Camera Mắt thần bóng đêm</h3>
            <p>Thế hệ camera Mắt thần bóng đêm thứ hai được nâng cấp AI để các chi tiết tăng cường và sắc màu tái tạo chuẩn nét điện ảnh. Bạn hãy thử camera trên Samsung S23 và việc sở hữu bộ sưu tập ảnh đêm ấn tượng và rực nét là điều dễ dàng.</p>
            <p>Bí kíp chụp đêm của Samsung Galaxy S23 còn phải kể đến công nghệ Dual Pixel lấy nét nhanh và chuẩn xác trong mọi điều kiện. AI tiên tiến cực kì thông minh, có thể phát hiện mọi chủ thể và tùy chỉnh màu sắc chân thực như những gì mà mắt nhìn thấy.</p>
            <h3>Thước phim đêm đẳng cấp</h3>
            <p>Sự kết hợp hoàn hảo của camera góc rộng 50MP và chống rung OIS&nbsp;trên Samsung S23&nbsp;mang tới chi tiết cao cho từng thước phim, cố định khung hình vững chắc, giúp điện thoại ghi lại các thước phim sắc nét và chuyên nghiệp một cách dễ dàng, trở thành chuyên gia nhiếp ảnh ngay trong tầm tay. Từ đó, bạn có thể thỏa sức sáng tạo mọi nội dung video và tạo ra dấu ấn riêng, khẳng định khả năng của bản thân, bật nét cá tính ở các lĩnh vực bạn yêu thích.</p>
            <h3>Gặp gỡ nhiếp ảnh di động thiên văn tiên tiến</h3>
            <p>Công nghệ Samsung S23&nbsp;giúp người dùng khám phá những điều thú vị từ bầu trời đêm vô tận một cách dễ dàng. Các nhà sáng tạo chuyên nghiệp của Samsung&nbsp;đã tích hợp bộ công cụ chuyên biệt hóa trải nghiệm chụp ảnh. Theo đó, tại&nbsp;ứng dụng Expert RAW, người dùng có thể chụp ảnh với chất lượng cao, nhiều chi tiết. Kết hợp với tính năng Astrophoto (Chụp thiên văn), giúp&nbsp;phóng to tới các vì sao và hành tinh của bạn. Hãy trải nghiệm và tận hưởng những khung hình thú vị, sắc nét từ ngân hà trong đêm.</p>
            <h3>Siêu chi tiết đến bất ngờ</h3>
            <p>Camera góc rộng 50MP và vi xử lý mới của Samsung S23 chính là bí quyết để hình ảnh có độ sắc nét đến bất ngờ. Sự cộng hưởng từ công nghệ Ảnh siêu chi tiết còn đảm bảo chất lượng hình rõ ràng tương tự như máy ảnh chuyên nghiệp, bạn có thể thu phóng mọi chi tiết, khoảng cách không còn là trở ngại để&nbsp;chụp được các khung hình yêu thích.</p>
            <h3>Chỉnh sửa ảnh chuyên nghiệp – phục hồi ảnh dễ dàng</h3>
            <p>Những điều tưởng chừng không phục hồi, lại trở nên dễ dàng&nbsp;hơn trên Samsung Galaxy S23. Điện thoại tích hợp sẵn Công cụ chỉnh sửa ảnh chuyên nghiệp, giúp&nbsp;các ảnh tối, mờ, nhòe hay tấm ảnh từ thuở thơ ấu&nbsp;thiếu chất lượng&nbsp;trở nên rõ ràng, sắc nét và&nbsp;tái tạo lại&nbsp;màu sống động hơn. Thậm chí, bạn có thể nâng cao cả chất lượng file GIF với các tính năng hữu ích như giảm nhiễu, tăng nét.</p>
            <h3>Hiệu năng đẳng cấp – Snapdragon nhanh nhất thế giới</h3>
            <p>Không chỉ mạnh, mà còn chuyên biệt và độc tôn với uy lực&nbsp;từ Snapdragon 8 Gen 2 for Galaxy. Bộ vi xử lý được chế tạo và tối ưu dành riêng cho Galaxy S23, giúp hiệu năng mạnh và mạnh hơn nữa. Phần CPU và GPU của Snapdragon 8 Gen 2 for Galaxy có tốc độ nhanh hơn, cho khả năng xử lý tốc độ, đa nhiệm hay gaming đều mượt mà đáng kinh ngạc. Đây chính là hiệu năng nhanh nhất trên điện thoại Android ở thời điểm này, cho mọi trải tuyệt vời dành cho người dùng Galaxy.</p>
            <h3>Khám phá màn hình cao cấp, trải nghiệm mãn nhãn</h3>
            <p>Một màn hình chuẩn cao cấp với chi tiết đạt chuẩn tốt nhất hiện nay trên thị trường smartphone. Đây là màn hình có kích thước 6.1 inch, hỗ trợ HDR 10+ trên tấm nền Dynamic AMOLED 2X cho chất lượng sắc nét, sống động, mãn nhãn, đáp ứng tốt nhu cầu giải trí, từ xem phim, Youtube đến gaming.</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/e6/a5/8e/191a4c76fe263b488a6871f24c138cfe.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e6/a5/8e/191a4c76fe263b488a6871f24c138cfe.jpg" alt="" width="750" height="750"></p>
            <p>Độ mượt là tâm điểm với tần số quét 120Hz, các thao tác chuyển cảnh có tốc độ bất ngờ, bạn sẽ thấy sự khác biệt khi sử dụng Samsung&nbsp;S23 khi lướt, vuốt, cuộn hay “chiến” các game hỗ trợ.</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/eb/62/a6/d794a8e8cbd1677fdda9f40f722ccbcd.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/eb/62/a6/d794a8e8cbd1677fdda9f40f722ccbcd.jpg" alt="" width="750" height="750"></p>
            <p>Màn hình Samsung Galaxy S23 còn được nâng cấp độ sáng khi đã đạt đến 1.750 nit, bất chấp mọi điều kiện sáng, màn hình vẫn đảm độ nét dù ở bất kỳ đâu, ngay cả ngoài trời nắng gắt. Đồng thời, Samsung cũng quan tâm tới sức khỏe đôi mắt với tính năng Eye Comfort Shield giúp bảo vệ mắt tối ưu hơn.</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/f8/58/8b/d796aacb697492f4a43a68b64b1f19f4.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/f8/58/8b/d796aacb697492f4a43a68b64b1f19f4.jpg" alt="" width="750" height="416"></p>
            <h3>Tăng cường pin, trải nghiệm thoải mái</h3>
            <p>Samsung Galaxy S23 được tăng cường pin so với thế hệ tiền nhiệm, giúp người dùng sử dụng thoải mái hơn. Bạn sẽ thỏa sức luyện phim, chơi game, lướt mạng xã hội hay luôn giữ liên lạc, kết nối trực tuyến với mọi người, mà không sợ bị gián đoạn. Ngoài ra, để giúp cuộc sống tiện lợi, Samsung S23 có hỗ trợ sạc nhanh 25W, nạp đầy lượng pin nhanh chóng, sẵn sàng cho mọi hoạt động.</p>
            <h3>Chuyển dữ liệu an toàn và nhanh chóng</h3>
            <p>Phần chuyển dữ liệu từ điện thoại khác sang Samsung Galaxy S23 cũng nhanh chóng. Chỉ cần một lần truyền với kết nối Wi-Fi hoặc&nbsp;đăng nhập tài khoản Samsung là bạn đã hoàn thành cài đặt. Các thao tác rất đơn giản, mà vẫn đảm bảo các thông tin, ứng dụng, ảnh, video, tin nhắn, danh bạ… luôn được giữ trọn vẹn, từ bất kỳ hệ điều hành nào sang điện thoại mới.&nbsp;Bạn có thể xem chi tiết hướng dẫn tại đây.</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/9e/fd/ef/39fded1865e96aa86fe102c7e5f1e249.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/9e/fd/ef/39fded1865e96aa86fe102c7e5f1e249.jpg" alt="" width="750" height="416"></p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/65/92/bc/acb026dfae6ffc174aafcda59067b4a1.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/65/92/bc/acb026dfae6ffc174aafcda59067b4a1.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/ce/c8/99/2b95e5cc35fc5d29830daf4e3ea2952b.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/ce/c8/99/2b95e5cc35fc5d29830daf4e3ea2952b.jpg" alt="" width="750" height="750"></p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/59/76/55/acc39501c08c603d0479e0849c817398.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/59/76/55/acc39501c08c603d0479e0849c817398.jpg" alt="" width="750" height="926"></p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/07/f4/0f/72fb4c587d63ea31d903b60eb5b7c049.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/07/f4/0f/72fb4c587d63ea31d903b60eb5b7c049.jpg" alt="" width="750" height="562"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'galaxys23.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Điện thoại Samsung Galaxy Z Flip 4 (8GB/256GB) - Hàng chính hãng',
            'price' => 700,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Nhỏ gọn trong lòng bàn tay của bạn</h3>
            <p><strong>Samsung Galaxy Z Flip4 256GB</strong> sở hữu ngoại hình bắt trend với các cạnh được gia công phẳng một cách tinh tế. Ra mắt với 4 phiên bản màu sắc giúp người dùng có thêm nhiều sự lựa chọn dành cho bản thân, cùng với tone màu trẻ trung thời thượng giúp người dùng toát lên được vẻ ngoài sang trọng và đầy tính hiện đại.</p>
            <p>Lần ra mắt này Samsung cho biết hãng đã nâng cấp phần bản lề để tăng tổng số lần gập trên Flip4, giúp thiết bị có thể đồng hành với người dùng trong khoảng thời gian lâu dài hơn mà ít khi khi gặp phải các tình trạng hỏng hóc.</p>
            <p>Tổng thể chiếc Galaxy Z Flip4 được bao bọc bởi bộ khung làm từ vật liệu nhôm Armor Aluminum cao cấp, không chỉ gia tăng độ bền cho máy mà nó còn giúp cho điện thoại toát lên được vẻ ngoài sang trọng và đẳng cấp nhờ khả năng phản quang óng ánh.</p>
            <p>Galaxy Z Flip4 sẽ có một thân hình thon gọn nhờ ứng dụng tỉ lệ màn hình 22:9, điều này giúp cho quá trình cầm nắm của bạn trở nên dễ chịu hơn bởi bề rộng của máy được tối ưu đi. Với kích thước chiều dài sau khi gập là 84.9 mm, vì thế thiết bị có thể dễ dàng nằm gọn trong lòng bàn tay để bạn có thể cầm nắm một cách chắc chắn.</p>
            <p>Samsung cho biết đây là điện thoại gập có hỗ trợ chuẩn kháng nước IPX8, giờ đây mọi người có thể an tâm hơn trong những tình huống khi vô tình tiếp xúc với nước.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/d4/db/fc/2c9590285c2d1817ca2b5d00062cd952.png" width="750" height="475"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/36/cc/f4/4fd8f9978e32c73634c770dd53d9f4d9.png" width="750" height="343"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/cd/c4/61/42758d548bae231ddacd18eebb407347.png" width="750" height="230"></p>
            <h3>Hiển thị hình ảnh sinh động</h3>
            <p>Trang bị trên máy là tấm nền Dynamic AMOLED 2X cao cấp đến từ nhà Samsung với khả năng tái hiện hình ảnh có màu sắc sống động và rực rỡ. Màu đen trên màn hình cũng được hiển thị sâu giúp cho người dùng có thể trải nghiệm nội dung trên các tựa game hay bộ phim hành động trở nên chân thực hơn.</p>
            <p>Mật độ điểm ảnh được gia tăng lên 425 PPI vì máy được trang bị màn hình kích thước 6.7 inch cùng độ phân giải Full HD+ (1080 x 2640 Pixels). Các tác vụ chỉnh sửa ảnh sẽ được xử lý dễ dàng hơn trên chiếc Galaxy Z Flip4 bởi độ sắc nét mà nó mang lại là rất cao.</p>
            <p>Phần mặt lưng của máy sẽ được trang bị một màn hình phụ có kích thước 1.9 inch giúp người dùng có thể đọc nhanh những thông báo, thậm chí ở phiên bản này máy còn hỗ trợ nhận cuộc gọi trực tiếp từ màn hình phụ mà không không cần phải mở điện thoại.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/82/85/5d/c5c777e1b4b7ccb53a89e6cba6e6469d.png" width="750" height="273"></p>
            <p>Với tần số quét lên đến 120 Hz ở màn hình chính giúp cho mọi thao tác hàng ngày của bạn được diễn ra mượt hơn hẳn, ngoài ra máy còn có khả năng tự động điều chỉnh xuống còn 1 Hz cho những tác vụ không cần cuộn lướt quá nhiều để tiết kiệm điện năng tiêu thụ.</p>
            <p>Độ sáng của Galaxy Z Flip4 đạt mức tối đa là 1200 nits, giúp thiết bị có khả năng hiển thị hình ảnh được rõ ràng hơn mỗi khi người dùng sử dụng điện thoại ở ngoài trời có độ sáng cao. Điều này thực sự hữu ích trong những tình huống như chụp ảnh ngoài trời hay xem bản đồ trong lúc di chuyển ngoài đường.</p>
            <h3>Chụp ảnh quay phim sắc nét</h3>
            <p>Galaxy Z Flip4 sở hữu ở phần mặt lưng là bộ đôi camera có cùng độ phân giải 12 MP với khả năng thu lại hình ảnh sắc nét, cũng như giúp bạn có thể quay được những thước phim đạt chuẩn 4K.</p>
            <p>Đi kèm với đó sẽ là tính năng chụp ảnh góc siêu rộng lên đến 123 độ, giờ đây người dùng có thể ghi lại những tấm ảnh có độ bao quát tốt hơn để mang trọn khung cảnh hùng vĩ vào trong bức hình. Chống rung quang học OIS cũng sẽ được bổ sung trên máy, đây chắc hẳn là tính năng rất hữu ích dành cho các bạn vlogger bởi sự giảm thiểu độ rung lắc trên khung hình mà bạn quay được.</p>
            <p>Phía mặt trước của máy sẽ là camera 10 MP được thiết kế theo dạng nốt ruồi quen thuộc. Cùng với đó sẽ là nhiều tính năng hữu ích giúp xử lý da của bạn trở nên mịn màng hơn, người dùng có thể tự tin chia sẻ những bức ảnh tự chụp lên các trang mạng xã hội để khoe với bạn bè.</p>
            <p>Ngoài ra bạn cũng có thể selfie bằng cụm camera sau một cách dễ dàng nhờ sự hỗ trợ đến từ màn hình phụ, bởi màn hình này sẽ cho bạn biết chất lượng ảnh mà máy sẽ thu lại ra sao để từ đó tìm cách điều chỉnh khung hình hay gương mặt sao cho bức ảnh trở nên ưng ý nhất.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/e4/d6/91/acef6e7b083aa96b5da0ef2a422d6e6e.png" width="750" height="358"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/e9/8d/e4/1e1449c35f5f13738c09a4fb21c6c896.png" width="750" height="346"></p>
            <h3>Cân mọi tác vụ với chipset hàng đầu đến từ Qualcomm</h3>
            <p>Bộ vi xử lý Snapdragon 8+ Gen 1 là cái tên được Samsung chọn để trang bị trên chiếc điện thoại flagship này, với hiệu năng mạnh mẽ nên mọi tác vụ cơ bản hàng ngày khó mà làm chiếc Galaxy Z Flip4 xảy ra tình trạng giật lag. Hơn thế nữa, ở mức cấu hình khủng như vậy thì máy hoàn toàn đáp ứng cho bạn khả năng chơi mượt nhiều tựa game đồ họa cao đang hiện hành.</p>
            <p>Điện thoại RAM 8 GB nên người dùng có thể an tâm hơn trong việc mở đồng thời nhiều ứng dụng mà không cần tắt đa nhiệm, bởi đây được xem là mức dung lượng khá cao cho việc lưu trữ các thông tin tạm thời mà không cần quá lo lắng đến việc máy sẽ giật lag hay tải lại ứng dụng.</p>
            <h3>Lấp đầy viên pin chỉ trong tích tắc</h3>
            <p>Bên trong một thiết bị có thân hình thanh mảnh sẽ là viên pin có dung lượng 3700 mAh, mặc dù con số này được xem là không quá lớn nhưng đây vẫn đủ để bạn có thể sử dụng cho việc liên lạc hay nghe nhạc cả ngày.</p>
            <p>Với công nghệ sạc nhanh 25 W nên việc lấp đầy viên pin trên Galaxy Z Flip4 sẽ chỉ còn trong tích tắc, ngoài ra người dùng còn thể sử dụng tính năng sạc không dây hết sức thuận tiện khi không phải loay hoay trong việc tìm jack cắm.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/ba/37/c0/312b946758fe2ab07db32a02d2f107df.png" width="750" height="556"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/25/e0/3c/962d1aab922a77469acbb045aa0cffd6.png" width="750" height="493"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/d0/32/66/a1e9a0563995fdbb293b45e523e66c12.png" width="750" height="274"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/70/d5/1c/36df23cf753edfacbb0e1742d63ba1e1.png" alt="" width="750" height="850"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/c2/9a/a4/4cb268b06971674035b5040c357791cc.png" width="750" height="303"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/de/7d/73/fce304b661395d88e8e441c5d995c9b4.png" width="750" height="3113"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'galaxyzflip4.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPad 10.2-inch (9th Gen) Wi-Fi, 2021',
            'price' => 870,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Mạnh mẽ. Dễ sử dụng. Linh hoạt. iPad có màn hình Retina 10.2 inch tuyệt đẹp, chip A13 Bionic mạnh mẽ, camera trước Ultra Wide có tính năng Trung Tâm Màn Hình, tương thích với Apple Pencil và Smart Keyboard.1 iPad giúp bạn dễ dàng làm được nhiều việc hơn nữa. Tất cả tính năng với mức giá ấn tượng.</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>Màn hình Retina 10.2 inch sống động với True Tone</li>
            <li>Chip A13 Bionic với Neural Engine</li>
            <li>Camera sau Wide 8MP, camera trước Ultra Wide 12MP với tính năng Trung Tâm Màn Hình</li>
            <li>Dung lượng lưu trữ : phiên bản 64GB / 256GB</li>
            <li>Loa stereo</li>
            <li>Xác thực bảo mật với Touch ID</li>
            <li>Wi-Fi 802.11ac và dữ liệu di động LTE chuẩn Gigabit<sup>2</sup></li>
            <li>Thời lượng pin lên tới 10 giờ<sup>3</sup></li>
            <li>Cổng kết nối Lightning để sạc và kết nối phụ kiện</li>
            <li>Tương thích với Apple Pencil (thế hệ thứ 1) và Smart Keyboard<sup>1</sup></li>
            <li>iPadOS 15 sở hữu sức mạnh độc đáo, dễ sử dụng và được thiết kế cho tính đa năng của iPad</li>
            </ul>
            <h3>Pháp lý</h3>
            <p>Ứng dụng có sẵn trên App Store. Nội dung được cung cấp có thể thay đổi.</p>
            <p><sup>1</sup>Phụ kiện được bán riêng. Khả năng tương thích tùy thuộc thế hệ sản phẩm.</p>
            <p><sup>2</sup>Cần có gói cước dữ liệu. Mạng LTE chuẩn Gigabit, 4G LTE Advanced, 4G LTE và gọi Wi-Fi chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ phụ thuộc vào thông lượng lý thuyết và có thể thay đổi tùy địa điểm và nhà mạng. Để biết thông tin về hỗ trợ mạng LTE, vui lòng liên hệ nhà mạng và truy cập <a href="http://apple.com/iphone/cellular" rel="nofollow noreferrer">apple.com/ipad/cellular</a>.</p>
            <p><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập <a href="http://apple.com/batteries" rel="nofollow noreferrer">apple.com/batteries</a> để biết thêm thông tin.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'ipad9.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPad Air (5th Gen) Wi-Fi, 2022',
            'price' => 1300,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>iPad Air 5 M1 hoàn toàn mới. Linh hoạt hơn bao giờ hết. Màn hình Liquid Retina 10.9 inch tuyệt đẹp với dải màu rộng cho bạn trải nghiệm thị giác vô cùng sống động và chi tiết khi xem ảnh hay video cũng như khi chơi game trên thiết bị (1). Chip Apple M1 nổi bật với hiệu năng vận hành mạnh mẽ và các tính năng máy học cao cấp, hỗ trợ tối đa tác vụ biên tập video 4K, soạn bài thuyết trình đẹp mắt hay thiết kế mô hình 3D - mọi tác vụ đều thật dễ dàng. Thiết bị giờ đã hỗ trợ Magic Keyboard và Apple Pencil (thế hệ thứ 2) (2), Touch ID nhanh nhạy, dễ sử dụng, bảo mật cao, camera sau 12MP góc siêu rộng hỗ trợ Center Stage và camera FaceTime HD 12MP góc rộng, cổng kết nối USB-C hỗ trợ sạc và phụ kiện, thời lượng pin bền bỉ cả ngày (3), công nghệ Wi-Fi 6. Với iPad Air 5 trong tay, bạn đã có đủ sức mạnh để hiện thực hóa mọi ý tưởng của bản thân.</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>Màn hình Liquid Retina 10.9 inch tuyệt đẹp với True Tone và dải màu rộng P3 (1)</li>
            <li>Chip Apple M1</li>
            <li>Xác thực bảo mật với Touch ID</li>
            <li>Camera trước: 12MP góc rộng, Camera sau: 12MP góc siêu rộng hỗ trợ Center Stage</li>
            <li>Hiện có các màu xám, trắng, hồng, tím, xanh</li>
            <li>Âm thanh stereo rộng</li>
            <li>Thời lượng pin lên đến 10 giờ (3)</li>
            <li>Wi-Fi 6 (802.11ax)</li>
            <li>Cổng kết nối USB-C để sạc và kết nối phụ kiện</li>
            <li>Hỗ trợ Magic Keyboard, Smart Keyboard Folio và Apple Pencil (thế hệ thứ 2) (2)</li>
            <li>iPadOS 15 mang đến cho bạn các chức năng mới được thiết kế dành riêng cho iPad</li>
            </ul>
            <h3>Pháp lý</h3>
            <p>Ứng dụng có sẵn trên App Store. Nội dung được cung cấp có thể thay đổi.</p>
            <p>(1) Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình iPad Air (thế hệ thứ 4) là 10.86 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p>
            <p>(2) Phụ kiện được bán riêng. Khả năng tương thích tùy thuộc thế hệ sản phẩm.</p>
            <p>(3) Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập để biết thêm thông tin.</p>
            <p>(4) Cần có gói cước dữ liệu. Liên hệ với nhà mạng tại thị trường của bạn để biết thêm chi tiết. Tốc độ có thể thay đổi tùy địa điểm.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'ipadair5.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy Tab S7 FE 4GB/64GB - Hàng Chính Hãng',
            'price' => 1200,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Samsung&nbsp;chính thức trình làng mẫu&nbsp;máy tính bảng&nbsp;có tên&nbsp;Galaxy Tab S7 FE, máy trang bị cấu hình mạnh mẽ, màn hình giải trí siêu lớn và điểm ấn tượng nhất là viên pin siêu khủng được tích hợp bên trong, giúp tăng hiệu suất làm việc nhưng vẫn có tính di động cực cao.</h3>
            <h3>Viên pin “khủng long” vượt mốc 10000 mAh</h3>
            <p>Galaxy Tab S7 FE sẽ khiến bạn choáng ngợp với dụng lượng&nbsp;pin cực khủng&nbsp;10090 mAh đảm bảo cho cường độ làm việc, giải trí liên tục trong nhiều giờ liền.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-05.jpg" rel="nofollow noreferrer"><img class="ls-is-cached lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-05.jpg" width="750" height="499"></a></p>
            <p>Theo công bố từ Samsung, với dung lượng lớn này giúp cho Galaxy Tab S7 FE có thể dùng lên tới 12 giờ lướt web với mạng LTE và 13 giờ xem video trực tuyến qua wifi.</p>
            <p>Bên cạnh đó, thời gian sạc cũng được rút ngắn đáng kể khi&nbsp;máy tính bảng có&nbsp;sạc nhanh&nbsp;công suất tối đa lên đến 45 W, tuy nhiên để sạc với tốc độ này bạn cần mua củ sạc phù hợp vì sạc kèm theo máy chỉ 15 W.</p>
            <h3>Chơi hết sức, làm việc hết mình với màn hình siêu lớn</h3>
            <p>Máy tính bảng Samsung Galaxy Tab S7 FE&nbsp;có một phiên bản màn hình duy nhất với&nbsp;kích thước lớn 12.4 inch, phần viền bao quanh được thu nhỏ, tạo nên không gian rộng rãi, thoải mái cho bạn làm việc hay giải trí.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-03.jpg" rel="nofollow noreferrer"><img class="ls-is-cached lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-03.jpg" width="750" height="499"></a></p>
            <p>Màn hình của máy có độ phân giải&nbsp;1600 x 2560 pixels đảm bảo cho chất lượng hình ảnh sắc nét trên màn hình lớn. Màn hình lớn giúp các nội dung giải trí được hiển thị tối ưu khi cầm máy ở cả chiều ngang hay dọc, cho bạn trải nghiệm chơi game và xem phim tuyệt vời nhất.</p>
            <h3>Thiết kế cao cấp, tính di động cao</h3>
            <p>Galaxy Tab S7 FE vẫn sử dụng thiết kế vát thẳng mạnh mẽ ở phần cạnh viền tương tự&nbsp;Galaxy Tab S7.&nbsp;Tuy vậy, cảm giác cầm S7 FE vẫn rất tốt, các góc cạnh đều đã được xử lý mềm mại hơn, để không gây bất kỳ sự khó chịu hay cấn tay khi cầm.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-01.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-01.jpg" width="750" height="499"></a></p>
            <p>Thân máy được hoàn thiện nguyên khối, được gia công bề mặt vô cùng hoàn hảo, dải anten được bố trí và làm đồng màu với thân máy tạo nên thiết kế liền mạch và đẳng cấp.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/tab-s7-fe-1.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/tab-s7-fe-1.jpg" width="750" height="499"></a></p>
            <p>Galaxy Tab S7 FE cũng là chiếc máy tính bảng có độ mỏng ấn tượng 6.3 mm, dù được trang bị viên pin cực khủng. Khối lượng 608 g nhẹ hơn nhiều so với&nbsp;laptop, thoải mái để bạn mang theo bên mình và xử lý công việc, kiểm tra ở bất cứ đâu.</p>
            <h3>Cấu hình mạnh mẽ</h3>
            <p>Cấu hình của Galaxy Tab S7 FE phần nào đã được cắt giảm so với phiên bản tiêu chuẩn, nhưng các tựa game đồ họa cao và ứng dụng văn phòng vẫn không làm khó được mẫu máy này, nhờ trang bị&nbsp;vi xử lý Snapdragon 750G giúp cho máy có tốc độ mở ứng dụng khá nhanh và chơi game 3D mượt mà.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/tab-s7-fe-2.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/tab-s7-fe-2.jpg" width="750" height="499"></a></p>
            <p>Máy tính bảng có&nbsp;RAM 4 GB&nbsp;đáp ứng tốt nhu cầu đa nhiệm của máy và&nbsp;bộ nhớ trong 64 GB&nbsp;hỗ trợ mở rộng thêm dung lượng qua thẻ nhớ cho bạn thoải mái lưu trữ dữ liệu.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-08.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-08.jpg" width="750" height="499"></a></p>
            <p>Samsung tiếp tục mang lên dòng Tab S7 FE hệ thống loa chuẩn Dolby Atmos giúp nâng tầm trải nghiệm như nghe nhạc, xem phim với chất âm cao cấp được tinh chỉnh bởi các chuyên gia âm thanh hàng đầu.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-02.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-02.jpg" width="750" height="499"></a></p>
            <h3>Thỏa mãn sáng tạo với bút S-Pen</h3>
            <p>Galaxy Tab S7 FE tương thích với bút S-Pen thế hệ mới, cải tiến với độ trễ cực thấp mang đến những nét vẽ tự nhiên và chân thật cho phép bạn thỏa sức sáng tạo, thực hiện các ý tưởng của mình mọi lúc mọi nơi.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-11.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-11.jpg" width="750" height="421"></a></p>
            <p>Hỗ trợ chế độ Samsung DeX cùng bàn phím rời, giúp cho Galaxy Tab S7 FE trở thành một chiếc máy tính cá nhân với giao diện đa cửa sổ tương tự Window, giúp bạn xử lý nhiều công việc cùng lúc trên 1 màn hình.</p>
            <p><a class="preventdefault" href="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-07.jpg" rel="nofollow noreferrer"><img class="lazyloaded" src="https://cdn.tgdd.vn/Products/Images/522/240254/samsung-galaxy-tab-s7-fan-editon-07.jpg" width="750" height="499"></a></p>
            <p>Lưu ý: Các phụ kiện hỗ trợ như bàn phím sẽ không đi kèm trong hộp.</p>
            <p>Tóm lại, Galaxy Tab S7 FE được xem là phiên bản rút gọn Galaxy Tab S7 mang đến một thiết bị có mức giá hợp lý hơn những vẫn đầy đủ những tính năng của dòng Galaxy Tab. Để tìm một chiếc tablet vừa mạnh mẽ vừa có thể linh động sẵn sàng mang đi đến bất kỳ đâu, thì Galaxy Tab S7 FE sẽ là cái tên sáng giá mà bạn nên cân nhắc.</p>
            <p>Màn hình</p>
            <p>Công nghệ màn hình: TFT LCD</p>
            <p>Độ phân giải: 1600 x 2560 Pixels</p>
            <p>Màn hình rộng: 12.4" - Tần số quét Hãng không công bố</p>
            <p>Hệ điều hành &amp; CPU</p>
            <p>Hệ điều hành: Android 11</p>
            <p>Chip xử lý (CPU): Snapdragon 750G</p>
            <p>Tốc độ CPU: 2 nhân 2.2 GHz &amp; 6 nhân 1.8 GHz</p>
            <p>Chip đồ hoạ (GPU): Adreno 619</p>
            <p>Bộ nhớ &amp; Lưu trữ</p>
            <p>RAM: 4 GB</p>
            <p>Dung lượng lưu trữ: 64 GB</p>
            <p>Dung lượng còn lại (khả dụng) khoảng: 50 GB</p>
            <p>Thẻ nhớ ngoài: Micro SD, hỗ trợ tối đa 1 TB</p>
            <p>Camera sau Độ phân giải: 8 MP</p>
            <p>Quay phim: Có</p>
            <p>Tính năng:</p>
            <p>Tự động lấy nét (AF)</p>
            <p>Chạm lấy nét</p>
            <p>HDR</p>
            <p>Nhận diện khuôn mặt</p>
            <p>Camera trước</p>
            <p>Độ phân giải:5 MP</p>
            <p>Tính năng:</p>
            <p>Quay video Full HD</p>
            <p>Quay video HD</p>
            <p>Tự động lấy nét (AF)</p>
            <p>Kết nối</p>
            <p>Mạng di động: Hỗ trợ 4G</p>
            <p>SIM: 1 Nano SIM</p>
            <p>Thực hiện cuộc gọi: Có</p>
            <p>Wifi:</p>
            <p>Wi-Fi 802.11 a/b/g/n/ac</p>
            <p>Wi-Fi Direct</p>
            <p>Wi-Fi hotspot</p>
            <p>Dual-band</p>
            <p>GPS:</p>
            <p>GPS</p>
            <p>A-GPS</p>
            <p>GLONASS</p>
            <p>Bluetooth:</p>
            <p>LE</p>
            <p>v5.0</p>
            <p>A2DP</p>
            <p>Cổng kết nối/sạc:</p>
            <p>Type-C</p>
            <p>Kết nối khác:</p>
            <p>OTG</p>
            <p>Tiện ích</p>
            <p>Tính năng đặc biệt:</p>
            <p>Kết nối bút S Pen</p>
            <p>Samsung DeX (Giao diện tương tự PC)</p>
            <p>Chế độ trẻ em (Samsung Kids)</p>
            <p>Mở khóa bằng khuôn mặt</p>
            <p>Âm thanh Dolby Atmos</p>
            <p>Âm thanh</p>
            <p>Pin &amp; Sạc</p>
            <p>Dung lượng pin: 10090 mAh</p>
            <p>Loại pin: Li-Ion</p>
            <p>Công nghệ pin: Sạc pin nhanh</p>
            <p>Hỗ trợ sạc tối đa: 45 W</p>
            <p>Sạc kèm theo máy: 15 W</p>
            <p>Thông tin chung</p>
            <p>Chất liệu: Khung &amp; Mặt lưng kim loại</p>
            <p>Kích thước, khối lượng: Dài 284.8 mm - Ngang 185 mm - Dày 6.3 mm - Nặng 608 g</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'galaxys7.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'MacBook Air 15 inch (M2, 2023)',
            'price' => 2000,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>MacBook Air (15 inch) </strong><strong>Chip M2</strong></p>
            <ul>
            <li>MacBook Air 15″. Lớn ấn tượng. Mỏng không tưởng.</li>
            <li>MacBook Air 15″. Siêu mạnh mẽ với M2.</li>
            <li>MacBook Air 15″. Siêu mỏng, siêu nhanh.</li>
            <li>MacBook Air. Nay đã có cỡ 15″.</li>
            </ul>
            <p>MacBook Air 15 inch mỏng không tưởng và sở hữu màn hình Liquid Retina tuyệt đẹp. Siêu mạnh mẽ với chip M2, cùng thời lượng pin lên đến 18 giờ,1 máy mang đến hiệu năng phi thường trong một thiết kế siêu gọn nhẹ.</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>Chip M2 cho hiệu năng phi thường</li>
            <li>CPU 8 lõi và GPU lên đến 10 lõi giúp dễ dàng xử lý các tác vụ phức tạp</li>
            <li>Neural Engine 16 lõi cho các tác vụ sử dụng công nghệ máy học tiên tiến</li>
            <li>Bộ nhớ thống nhất lên đến 24GB giúp bạn làm việc gì cũng nhanh chóng và trôi chảy</li>
            <li>Nhanh hơn đến 20% khi áp dụng bộ lọc và hiệu ứng cho hình ảnh2</li>
            <li>Nhanh hơn đến 40% khi chỉnh sửa các dòng thời gian video phức tạp2</li>
            <li>Hoạt động bền bỉ cả ngày dài với thời lượng pin lên đến 18 giờ1</li>
            <li>Thiết kế không quạt giảm tối đa tiếng ồn khi sử dụng</li>
            <li>Màn hình Liquid Retina 15,3 inch với độ sáng 500 nit và dải màu rộng P3 cho hình ảnh sống động và chi tiết ấn tượng3</li>
            <li>Camera FaceTime HD 1080p</li>
            <li>Bộ ba micrô phối hợp tập trung thu giọng nói của bạn, không thu tạp âm môi trường</li>
            <li>Hệ thống âm thanh sáu loa với Âm Thanh Không Gian cho trải nghiệm nghe sống động</li>
            <li>Cổng MagSafe 3, hai cổng Thunderbolt và jack cắm tai nghe</li>
            <li>Bàn phím Magic Keyboard có đèn nền và Touch ID giúp mở khóa và thanh toán an toàn hơn</li>
            <li>Kết nối không dây nhanh với Wi-Fi 6</li>
            <li>Ổ lưu trữ SSD siêu nhanh giúp mở các ứng dụng và tập tin chỉ trong tích tắc</li>
            <li>MacOS Ventura mang đến cho bạn những phương thức hiệu quả để hoàn thành nhiều việc hơn, chia sẻ và cộng tác, và chạy mượt mà cùng iPhone và iPad4</li>
            <li>Hiện có màu Đêm Xanh Thẳm, Ánh Sao, Xám Không Gian và Bạc</li>
            </ul>
            <h3>Pháp lý</h3>
            <p>Hiện có sẵn các lựa chọn để nâng cấp.</p>
            <p>(1) Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập để biết thêm thông tin.</p>
            <p>(2) So với thế hệ trước.</p>
            <p>(3) Màn hình của MacBook Air 15 inch có các góc trên được bo tròn. Khi tính theo hình chữ nhật chuẩn, kích thước màn hình theo đường chéo là 15,3 inch (diện tích hiển thị thực tế nhỏ hơn).</p>
            <p>(4) Yêu cầu có iCloud và kết nối internet.</p>
            <h3>Thông số kỹ thuật</h3>
            <p>Truy cập để xem cấu hình đầy đủ.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'photo' => 'macairm2.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'MacBook Pro M2 13 inch 2022',
            'price' => 2100,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h2><strong>MacBook Pro (13 inch)</strong></h2>
            <p>Sẵn sàng. Xách Pro lên. Và đi.</p>
            <p>Pro trên mọi nẻo đường.</p>
            <p>MacBook Pro 13”. Siêu mạnh mẽ với M2.</p>
            <h3><strong>Nội dung quảng cáo</strong></h3>
            <p>MacBook Pro 13 inch nay đa năng hơn bao giờ hết. Siêu mạnh mẽ với chip M2 thế hệ tiếp theo, đây là chiếc máy tính xách tay chuyên nghiệp nhỏ gọn nhất của Apple, cùng thời lượng pin lên đến 20 giờ.<sup>1</sup></p>
            <p><strong>Tính năng nổi bật</strong></p>
            <ul>
            <li>Chip M2 với CPU, GPU và hiệu năng máy học thế hệ tiếp theo</li>
            <li>CPU 8 lõi và GPU 10 lõi tốc độ cao để đảm đương những luồng công việc cường độ nặng</li>
            <li>Neural Engine 16 lõi cho các tác vụ sử dụng công nghệ máy học tiên tiến</li>
            <li>Bộ nhớ thống nhất lên đến 24GB giúp bạn làm mọi thứ đều trôi chảy</li>
            <li>Nhanh hơn 43 phần trăm khi hợp nhất các hình ảnh thành một bức tranh toàn cảnh<sup>2</sup></li>
            <li>Tốc độ chơi game nhanh hơn tới 39%<sup>2</sup></li>
            <li>Hệ thống tản nhiệt chủ động mang lại hiệu năng tuyệt vời</li>
            <li>Hoạt động bền bỉ cả ngày dài với thời lượng pin lên đến 20 giờ<sup>1</sup></li>
            <li>Màn hình Retina 13.3 inch với độ sáng 500 nit và dải màu rộng P3, cho hình ảnh sống động và chi tiết ấn tượng<sup>3</sup></li>
            <li>Camera FaceTime HD với bộ xử lý tín hiệu hình ảnh tiên tiến để bạn trông đẹp hơn trong các cuộc gọi video</li>
            <li>Ba micrô phối hợp chất lượng chuẩn studio thu giọng nói của bạn rõ hơn</li>
            <li>Kết nối không dây nhanh với Wi-Fi 6</li>
            <li>Hai cổng Thunderbolt để sạc và kết nối phụ kiện</li>
            <li>Bàn phím Magic Keyboard có đèn nền với Touch Bar và Touch ID, giúp mở khóa và thanh toán an toàn hơn</li>
            <li>Ổ lưu trữ SSD siêu nhanh giúp mở các ứng dụng và tập tin chỉ trong tích tắc</li>
            <li>macOS Monterey cho phép bạn kết nối, chia sẻ và sáng tạo theo cách chưa từng có, giữa tất cả các thiết bị Apple của bạn</li>
            <li>Hiện có màu xám bạc và bạc</li>
            </ul>
            <h3><strong>Cấu hình</strong></h3>
            <p>8GB / 256GB - MNEH3SA/A - APPLE M2 CHIP/8C CPU/10 GPU/8GB/256GB SSD/13.3"/XÁM<br>8GB / 256GB - MNEP3SA/A - APPLE M2 CHIP/8C CPU/10 GPU/8GB/256GB SSD/13.3"/BẠC<br>8GB / 512GB - MNEJ3SA/A - APPLE M2 CHIP/8C CPU/10 GPU/8GB/512GB SSD/13.3"/XÁM<br>8GB / 512GB - MNEQ3SA/A - APPLE M2 CHIP/8C CPU/10 GPU/8GB/512GB SSD/13.3"/BẠC<strong><br></strong></p>
            <h3><strong>Pháp lý</strong></h3>
            <p>Hiện có sẵn các lựa chọn để nâng cấp.</p>
            <p><sup>1 </sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập <a href="apple.com/batteries" rel="nofollow noreferrer">apple.com/batteries</a> để biết thêm thông tin.</p>
            <p><sup>2 </sup>So với thế hệ trước.</p>
            <p><sup>3 </sup>Kích thước màn hình tính theo đường chéo.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'macprom2.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop Dell Latitude 3420 L3420I5SSD (Core i5-1135G7/ 8GB/ 256GB SSD/ 14 HD/ Fedora)',
            'price' => 1900,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3 align="center">Laptop Dell Latitude 3420 (L3420I5SSD) (i5 1135G7 8GB RAM/256GB SSD/14.0 inch HD/Fedora/Đen)</h3>
            <p>Laptop Dell Latitude 3420 được thiết kế với kiểu dáng đơn giản, cứng cáp, sản phẩm có trọng lượng tương đối nhẹ để bạn dễ dàng mang theo bên mình.<strong>Dell Latitude 3420 L3420I5SSD</strong>&nbsp;lớp hoàn thiện bóng bẩy, mịn màng mang tới nét sang trọng, hiện đại phù hợp với xu hướng thời nay. Với thiết kế tạo sự liền mạch, sở hữu kiểu dáng tinh tế, thanh mảnh đáp ứng được đúng ý thích thẩm mĩ cho dân văn phòng.</p>
            <p><img src="https://salt.tikicdn.com/ts/product/32/8c/e8/6f03b0b1d1869bcaf599b65446d56084.jpg" alt=""></p>
            <p>Được trang bị bộ vi xử lý Intel Core i5-1135G7 2.40 GHz up to &nbsp;4.20 GHz, 8MB, RAM 8GB mang đến cho doanh nghiệp hiệu suất, khả năng quản lý, các tính năng bảo mật tích hợp sẵn. Ổ cứng có dung lượng 1TB (option) để bạn lưu trữ được các dữ liệu cần thiết hoặc như SSD sẽ giúp khởi động máy nhanh chóng</p>
            <p><img src="https://salt.tikicdn.com/ts/product/81/58/c2/a96395313f04484cea94ef6125f9822b.jpg" alt=""></p>
            <p>Tương thích với nhiều màn hình và phụ kiện hơn, với đầy đủ các cổng có sẵn giúp người dụng thuận tiện hơn trong quá trình sử dụng<br>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/product/75/59/0e/028df3fdbe786a277395f9d73a1d59bc.jpg" alt=""></p>
            <p>Bàn phím tràn cạnh lớn hơn, các phím bấm và bàn di chuột lớn hơn 18% giúp nhập và điều hướng dễ dàng hơn bao giờ hết.</p>
            <p><img src="https://salt.tikicdn.com/ts/product/10/e3/77/d1e3eb46d7ed315b9456487856bc6801.jpg" alt=""></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'dell3420.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Ổ cứng di động External SSD Sandisk Extreme V2 E61 New 2021 - 1TB',
            'price' => 600,
            'description' => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Dung lượng: 500GB, 1TB, 2TB Chống sốc, chống nước IP55 Thiết kế nhỏ gọn Tốc độ đọc ghi tối đa: 1050MB/s – 1000MB/s ( tốc độ sẽ thay đổi tùy vào thiết bị )</p>
            <p>Ổ cứng di động SSD SanDisk Extreme E61&nbsp; là một thiết bị lưu trữ mới của hãng ra đời để kế thừa những thành công vang dội của dòng E60 đã được ra mắt cách đây không lâu. Đây là một thiết bị có hiệu năng xử lý mạnh mẽ, cho phép người dùng có thể ghi lại những khoảnh khắc tuyệt vời. Đi kèm với khả năng chống rơi vỡ lên tới độ cao 2 mét. Công nghệ IP55 cho khả năng chống nước, chống bụi toàn diện.&nbsp;</p>
            <h2><strong>Ổ cứng di động có hiệu năng mạnh mẽ</strong></h2>
            <p><img class="aligncenter size-full wp-image-26869 litespeed-loaded" src="https://salt.tikicdn.com/ts/product/e7/96/49/645c5df8139eb502dc4dd279d21ec9e1.jpg" alt="" width="700" height="469"></p>
            <p>Đi kèm công nghệ NVMe tích hợp, ổ cứng này có tốc độ đọc ghi cực cao, lên tới 1050MB/s và 1000MB/s cho tác vụ đọc và ghi. Cho phép bạn dễ dàng lưu trữ một tập tin 5GB chỉ trong khoảng thời gian 1 phút đồng hồ.</p>
            <h2><strong>Dung lượng ổ cứng&nbsp;</strong></h2>
            <p><img class="aligncenter size-full wp-image-26872 litespeed-loaded" src="https://salt.tikicdn.com/ts/product/b8/1e/08/1eec7ea61b0210b8158f81f3e56ff6aa.jpg" alt="" width="700" height="342"></p>
            <p>Thiết bị này phù hợp với người dùng không có quá nhiều dữ liệu lưu trữ và họ quan trọng tốc độ xử lý nhiều hơn. Với 500GB dung lượng, cho phép một người dùng cá nhân có thể lưu trữ những tập tin quan trọng của mình ở nơi an toàn.</p>
            <h2><strong>Thiết kế cứng cáp chống rơi vỡ</strong></h2>
            <p><img class="aligncenter size-full wp-image-26870 litespeed-loaded" src="https://salt.tikicdn.com/ts/product/78/34/e0/5ef3d7336a9f80c66f4cc9c9f4e9a3f4.jpg" alt="" width="700" height="342"></p>
            <p>SSD SanDisk Extreme E61 đủ bền để đi cùng bạn đến bất cứ nơi đâu. Thiết bị này có khả năng chống rơi vỡ lên tới độ cao 2 mét và khả năng chống bụi, chống nước theo tiêu chuẩn IP55.</p>
            <h2>Thiết kế móc khóa tiện dụng</h2>
            <p><img class="aligncenter size-full wp-image-26871 litespeed-loaded" src="https://salt.tikicdn.com/ts/product/ba/3e/75/d25a8e7f4073e0bf981973f59b95bb2d.jpg" alt="" width="700" height="342"></p>
            <p>Thiết kế tiện dụng cho phép bạn có thể móc chiếc ổ cứng này vào thắt lưng hay ba lô của mình để có thể sử dụng khi cần thiết.</p>
            <h2><strong>Bảo vệ mọi thông tin dữ liệu của bạn luôn được an toàn</strong></h2>
            <p>Mọi thông tin dữ liệu riêng tư của bạn khi được lưu trữ trong chiếc ổ cứng này sẽ được bảo mật tuyệt đối cùng với công nghệ mã hóa dữ liệu phần cứng AES 256 bit tiên tiến nhất.</p>
            <h2><strong>Tương thích với các hệ điều hành phổ biến</strong></h2>
            <p><img class="aligncenter size-full wp-image-26873 litespeed-loaded" src="https://salt.tikicdn.com/ts/product/d7/3f/ee/96cfa70fcedc5ce82f97edf67a7e0f18.jpg" alt="" width="700" height="394"></p>
            <p>Ổ cứng này được sản xuất để sử dụng trên nhiều hệ điều hành khác nhau. Ngoài ra, nó cũng được trang bị riêng cổng kết nối USB Type C và USB Type A (bao gồm cáp kết nối), cho phép nó tương thích với Windows, mac OS hay thậm chí cả Linux nữa.</p>
            <h3>Thông số kĩ thuật ổ cứng di động SSD SanDisk Extreme E61 500GB</h3>
            <table width="880">
            <tbody>
            <tr>
            <td>Thương hiệu</td>
            <td>
            <p>Sandisk</p>
            </td>
            </tr>
            <tr>
            <td>Dung lượng</td>
            <td>
            <p>500GB, 1TB, 2TB</p>
            </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
            <td>Chuẩn&nbsp;giao tiếp</td>
            <td>
            <p>USB3.2 Gen2 (Type-C, Type-A)</p>
            </td>
            </tr>
            <tr>
            <td>Tốc độ đọc tối đa(MB)</td>
            <td>
            <p>1050 MB/s</p>
            </td>
            </tr>
            <tr>
            <td>Tốc độ ghi tối đa (MB)</td>
            <td>
            <p>1000 MB/s</p>
            </td>
            </tr>
            <tr>
            <td>Hệ điều hành hỗ trợ</td>
            <td>
            <p>Windows, macOS, Linux</p>
            </td>
            </tr>
            <tr>
            <td>Kích thước</td>
            <td>
            <p>100.54 x 52.42 x 8.95 (mm)</p>
            </td>
            </tr>
            <tr>
            <td>Cân nặng</td>
            <td>
            <p>63g</p>
            </td>
            </tr>
            </tbody>
            </table><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).</p></div>',
            'photo' => 'sandiskv2.jpg',
        ]);
    }
}
