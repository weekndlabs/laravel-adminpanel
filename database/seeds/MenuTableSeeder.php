<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(config('access.menus_table'))->truncate();
        $menu = [
            'id'                    => 1,
            'type'                  => 'backend',
            'name'                  => 'Backend Sidebar Menu',
            'items'                 => '[{"view_permission_id":"view-access-management","open_in_new_tab":0,"url_type":"route","url":"","name":"Access Management","id":11,"content":"Access Management","children":[{"view_permission_id":"view-user-management","open_in_new_tab":0,"url_type":"route","url":"admin.access.user.index","name":"User Management","id":12,"content":"User Management"},{"view_permission_id":"view-role-management","open_in_new_tab":0,"url_type":"route","url":"admin.access.role.index","name":"Role Management","id":13,"content":"Role Management"},{"view_permission_id":"view-permission-management","open_in_new_tab":0,"url_type":"route","url":"admin.access.permission.index","name":"Permission Management","id":14,"content":"Permission Management"}]},{"id":1,"name":"Module","url":"admin.modules.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-module","content":"Module"},{"view_permission_id":"view-menu","open_in_new_tab":0,"url_type":"route","url":"admin.menus.index","name":"Menus","id":3,"content":"Menus"},{"id":2,"name":"CMS Pages","url":"admin.cmspages.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-cms-pages","content":"CMS Pages"},{"view_permission_id":"view-email-template","open_in_new_tab":0,"url_type":"route","url":"admin.emailtemplates.index","name":"Email Templates","id":8,"content":"Email Templates"},{"view_permission_id":"edit-settings","open_in_new_tab":0,"url_type":"route","url":"admin.settings.edit?id=1","name":"Settings","id":9,"content":"Settings"},{"view_permission_id":"view-blog","open_in_new_tab":0,"url_type":"route","url":"","name":"Blog Management","id":15,"content":"Blog Management","children":[{"view_permission_id":"view-blog-category","open_in_new_tab":0,"url_type":"route","url":"admin.blogcategories.index","name":"Blog Category Management","id":16,"content":"Blog Category Management"},{"view_permission_id":"view-blog-tag","open_in_new_tab":0,"url_type":"route","url":"admin.blogtags.index","name":"Blog Tag Management","id":17,"content":"Blog Tag Management"},{"view_permission_id":"view-blog","open_in_new_tab":0,"url_type":"route","url":"admin.blogs.index","name":"Blog Management","id":18,"content":"Blog Management"}]},{"view_permission_id":"view-faq","open_in_new_tab":0,"url_type":"route","url":"admin.faqs.index","name":"Faq Management","id":19,"content":"Faq Management"}]',
            'created_by'            => 1,
            'created_at'            => Carbon::now(),
        ];

        DB::table(config('access.menus_table'))->insert($menu);
    }
}
