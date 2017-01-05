<?php

namespace App\Http\Controllers;


use EasyWeChat\Message\News;

class WechatController extends Controller
{
    //


    public function serve()
    {

        $wechat = app('wechat');

        $wechat->server->setMessageHandler(function($message){

            switch ($message->MsgType) {
                case 'event':
                    # 事件消息...
                    break;
                case 'text':
                    $news = new News([
                        'title'       => '图文',
                        'description' => '好厉害',
                        'url'         => 'http://www.koudaimiao.com',
                        'image'       => 'http://www.koudaimiao.com/Public/logo.jpg',
                        // ...
                    ]);

                    return $news;

                    break;
                case 'image':
                    return "你好,我还是威哥";
                    break;
                case 'voice':
                    # 语音消息...
                    break;
                case 'video':
                    # 视频消息...
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    break;
            }

        });

        return $wechat->server->serve();

    }


}
