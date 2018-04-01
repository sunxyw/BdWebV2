<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        // 头像假数据
        $avatars = [
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/s5ehp11z6s.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/Lhd1SHqu86.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/LOnMrqbHJn.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/xAuDMxteQy.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/ZqM7iaP4CR.png?imageView2/1/w/200/h/200',
            'https://fsdhubcdn.phphub.org/uploads/images/201710/14/1/NDnzMutoxX.png?imageView2/1/w/200/h/200',
        ];

        // 生成数据集合
        $users = factory(User::class)
            ->times(10)
            ->make()
            ->each(function ($user, $index)
            use ($faker, $avatars) {
                // 从头像数组中随机取出一个并赋值
                $user->avatar = $faker->randomElement($avatars);
            });

        // 让隐藏字段可见，并将数据集合转换为数组
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 插入到数据库中
        User::insert($user_array);

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'sunxyw';
        $user->email = 'xy2496419818@gmail.com';
        $user->password = bcrypt('131782');
        $user->avatar = '/uploads/images/avatars/201803/29/1_1522307902_8yztVsagld.jpg';
        $user->save();

        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Master');

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->name = '西瓜';
        $user->email = '2310502033@qq.com';
        $user->password = bcrypt('123456');
        $user->avatar = '/img/team/member-1.jpg';
        $user->save();
        $user->assignRole('Leader');

        $user = User::find(3);
        $user->name = '冬瓜';
        $user->email = '1198545557@qq.com';
        $user->password = bcrypt('123456');
        $user->avatar = '/img/team/member-2.jpg';
        $user->save();
        $user->assignRole('Admin');

        $user = User::find(4);
        $user->name = '阿布';
        $user->email = '3287669416@qq.com';
        $user->password = bcrypt('123456');
        $user->avatar = '/img/team/member-3.jpg';
        $user->save();
        $user->assignRole('Admin');

    }
}