<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'What\'s New in PHP 7.2',
                'slug' => 'whats-new-in-php-72',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 1,
                'featured' => 'uploads/posts/15260882132.png',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:23:33',
                'updated_at' => '2018-05-12 01:23:33',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Magento 2.3 Progress Update',
                'slug' => 'magento-23-progress-update',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 4,
                'featured' => 'uploads/posts/15260899603.jpg',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:24:08',
                'updated_at' => '2018-05-12 01:52:40',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Codes and Coffee',
                'slug' => 'codes-and-coffee',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 5,
                'featured' => 'uploads/posts/15260883035.jpg',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:25:03',
                'updated_at' => '2018-05-12 01:25:03',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Just How Different is Laravel 5.6?',
                'slug' => 'just-how-different-is-laravel-56',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 3,
                'featured' => 'uploads/posts/15260897791.png',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:49:39',
                'updated_at' => '2018-05-12 01:49:39',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Laravel 5.6, PHP 7.2, and ReactJS',
                'slug' => 'laravel-56-php-72-and-reactjs',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 3,
                'featured' => 'uploads/posts/15260898593.jpg',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:50:59',
                'updated_at' => '2018-05-12 01:51:47',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Magento 2.3 and GraphQL',
                'slug' => 'magento-23-and-graphql',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 4,
                'featured' => 'uploads/posts/15260899304.jpg',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:52:10',
                'updated_at' => '2018-05-12 01:52:10',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Magento\'s Cloud is the Best Way to Host Magento',
                'slug' => 'magentos-cloud-is-the-best-way-to-host-magento',
                'post_content' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Plus that new On-boarding UI is the shit!</p>',
                'category_id' => 4,
                'featured' => 'uploads/posts/15260900041.png',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:53:24',
                'updated_at' => '2018-05-12 01:54:27',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Laravel 5.6 is the Right Way to Write PHP',
                'slug' => 'laravel-56-is-the-right-way-to-write-php',
                'post_content' => '<p>Heck yes it is.....</p>',
                'category_id' => 3,
                'featured' => 'uploads/posts/15260901612.png',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:56:01',
                'updated_at' => '2018-05-12 01:56:01',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'MySQL or MariaDB? Which is Best for Your Site?',
                'slug' => 'mysql-or-mariadb-which-is-best-for-your-site',
                'post_content' => '<p>MariaDB. Oracle is evil.</p>',
                'category_id' => 1,
                'featured' => 'uploads/posts/15260902374.jpg',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:57:17',
                'updated_at' => '2018-05-12 01:57:17',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'PHP 7.2 or Java 10? Shit Post Central',
                'slug' => 'php-72-or-java-10-shit-post-central',
                'post_content' => '<p>That was fun... Now for your lorem</p>
<p>----&nbsp;</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat libero eu nulla accumsan, vel tempus dolor hendrerit. Suspendisse bibendum odio at purus pretium dictum. Etiam tincidunt lacus vel erat volutpat, in consequat nulla vestibulum. Nulla tincidunt fermentum tortor sit amet ultrices. Mauris sit amet libero auctor, molestie elit a, vulputate velit. Praesent id vestibulum arcu, et commodo augue. Donec vitae erat quis neque aliquet posuere.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras fermentum feugiat posuere. Proin malesuada lacinia dui in dapibus. Quisque tristique sem nunc, non venenatis dui bibendum vitae. Nullam in semper augue. Sed sapien ante, laoreet sit amet scelerisque in, convallis eu metus. Mauris pharetra feugiat convallis. Aliquam vestibulum rhoncus dapibus. Cras auctor nec velit sit amet cursus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Cras in sapien euismod, fermentum nibh pretium, scelerisque nunc. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce varius nisi nec neque porttitor rhoncus. Praesent in orci erat. Vivamus ac pulvinar ligula. Proin consequat turpis vel lacus molestie, sed ullamcorper dolor mattis. Aenean elementum, sapien et pulvinar rhoncus, lectus metus bibendum lacus, egestas tempor risus nisl sed augue. Ut quis eros at nisi vulputate hendrerit sit amet in turpis. Morbi egestas dictum finibus.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Nulla egestas lobortis fermentum. Mauris nec odio nisl. Ut vitae mauris eget nulla maximus porta. Maecenas finibus orci nulla, vitae mollis tortor euismod a. Morbi a volutpat nulla, mattis pellentesque eros. Aenean gravida consequat urna, quis aliquam nunc ullamcorper vitae. Cras sollicitudin arcu in mauris pharetra sodales. In enim odio, porta vel sodales sed, tempor vel felis.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;">Phasellus sed lectus diam. Quisque volutpat nulla velit, eu sollicitudin risus bibendum non. Ut in fermentum orci. Aliquam eget sapien in diam fringilla vulputate sed vel arcu. Sed purus sem, lacinia sit amet est id, egestas tempor enim. Maecenas ac orci eget nisi ullamcorper ullamcorper. Nulla vel feugiat velit. Cras lorem velit, convallis in pharetra eget, aliquet id justo. Aliquam id augue massa. Nulla tempor finibus cursus. Nulla facilisis dui at tincidunt congue. Phasellus ac libero sit amet dui pulvinar condimentum nec eu arcu.</p>',
                'category_id' => 1,
                'featured' => 'uploads/posts/15260903395.jpg',
                'deleted_at' => NULL,
                'created_at' => '2018-05-12 01:58:59',
                'updated_at' => '2018-05-12 01:58:59',
            ),
        ));
    }
}
