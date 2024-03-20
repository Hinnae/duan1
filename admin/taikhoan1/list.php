
<div class="row">
            <div class="row frmtitle">
                <h1>DANH SACH Tai Khoan</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>TEN DN</th>
                            <th>MÃ TK</th>
                            <th>Email</th>
                            <th>Mat Khau</th>
                            <th>Role</th>

                            <th></th>
                        </tr>
                        <?php
                            foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan);
                                $suatk="index.php?act=suatk&id=".$id;
                                $xoatk="index.php?act=xoatk&id=".$id;
                                
                                echo '<tr>
                              
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$email.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                        }

                        ?>
   
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=dskh"><input type="button" value="Nhập Thêm"></a>
                </div>
            </div>
        </div>