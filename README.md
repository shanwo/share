
 <h1 class="curproject-name"> share </h1> 
 


# 基础服务

## 公众号回调
<a id=公众号回调> </a>
### 基本信息

**Path：** /base/official

**Method：** POST

**接口描述：**


### 请求参数
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| nonce | 是  |   |  随机数 |
| signature | 是  |   |  加密签名 |
| timestamp | 是  |   |  时间戳 |
| openid | 是  |   |  openid |
| encrypt_type | 是  |   |  加密类型 |
| msg_signature | 是  |   |  消息体签名 |
**Body**

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> </span></td><td key=1><span></span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 公众号验证
<a id=公众号验证> </a>
### 基本信息

**Path：** /base/official

**Method：** GET

**接口描述：**


### 请求参数
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| echostr | 是  |   |  随机字符串 |
| signature | 是  |   |  加密签名 |
| timestamp | 是  |   |  时间戳 |
| nonce | 是  |   |  随机数 |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody">
               </tbody>
              </table>
            
## 地区信息
<a id=地区信息> </a>
### 基本信息

**Path：** /base/area

**Method：** GET

**接口描述：**
<p><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"data"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"lists"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">[</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"id"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(181, 206, 168);">2</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"pid"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(181, 206, 168);">1</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"card_code"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"110100"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"shortname"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"北京"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"name"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"北京市"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"merger_name"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"北京-北京市"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"level"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(181, 206, 168);">2</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"pinyin"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"beijing"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"code"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"010"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"zip_code"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"100000"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"first"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"B"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"lng"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"116.405285"</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"lat"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"39.904989"</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">}</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">]</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">},</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"code"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(181, 206, 168);">200</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"msg"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">null</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"uuid"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"1ebd56a2-f363-60ba-bede-782b467b51c0"</span><br>
<span class="colour" style="color: rgb(220, 220, 220);">}</span></p>


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Authorization  |   | 是  |  Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |  用户Token |
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| pid | 否  |   |  父ID  |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> lists</span></td><td key=1><span>object []</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5><p key=3><span style="font-weight: '700'">item 类型: </span><span>object</span></p></td></tr><tr key=0-0-0-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> pid</span></td><td key=1><span>number</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">父ID</span></td><td key=5></td></tr><tr key=0-0-0-2><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> card_code</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">身份证编码</span></td><td key=5></td></tr><tr key=0-0-0-3><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> shortname</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">简称</span></td><td key=5></td></tr><tr key=0-0-0-4><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> name</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">名称</span></td><td key=5></td></tr><tr key=0-0-0-5><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> merger_name</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">全称</span></td><td key=5></td></tr><tr key=0-0-0-6><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> level</span></td><td key=1><span>number</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">层级 0 1 2 省市区县</span></td><td key=5></td></tr><tr key=0-0-0-7><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> pinyin</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">拼音</span></td><td key=5></td></tr><tr key=0-0-0-8><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> code</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">长途区号</span></td><td key=5></td></tr><tr key=0-0-0-9><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> zip_code</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">邮编</span></td><td key=5></td></tr><tr key=0-0-0-10><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> first</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">首字母</span></td><td key=5></td></tr><tr key=0-0-0-11><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> lng</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">经度</span></td><td key=5></td></tr><tr key=0-0-0-12><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> lat</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">纬度</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 文件上传
<a id=文件上传> </a>
### 基本信息

**Path：** /base/upload

**Method：** POST

**接口描述：**
<p><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(156, 220, 254)">"data"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)">&nbsp;</span><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(156, 220, 254)">"url"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)">&nbsp;</span><span class="colour" style="color:rgb(206, 145, 120)">"<a href="https://cdn.shanwo.cc/local/picture/2021/06/ec68d73af7a.png">https://cdn.shanwo.cc/local/picture/2021/06/ec68d73af7a.png</a>"</span><br>
<span class="colour" style="color:rgb(212, 212, 212)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(220, 220, 220)">},</span><br>
<span class="colour" style="color:rgb(212, 212, 212)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(156, 220, 254)">"code"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)">&nbsp;</span><span class="colour" style="color:rgb(181, 206, 168)">200</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(156, 220, 254)">"msg"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)">&nbsp;</span><span class="colour" style="color:rgb(206, 145, 120)">null</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(156, 220, 254)">"uuid"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)">&nbsp;</span><span class="colour" style="color:rgb(206, 145, 120)">"1ebd56a9-ff24-66ea-af41-782b467b51c0"</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">}</span></p>


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Content-Type  |  multipart/form-data | 是  |   |   |
| Authorization  |   | 是  |  Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |  用户Token |
**Body**

| 参数名称  | 参数类型  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| file | file  |  是 |    |  (云函数限制文件不可超过6M) |



### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> url</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">文件地址</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 用户反馈
<a id=用户反馈> </a>
### 基本信息

**Path：** /base/feedback

**Method：** POST

**接口描述：**
<p><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"data"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"scalar"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(181, 206, 168);">1</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(220, 220, 220);">},</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"code"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(181, 206, 168);">200</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"msg"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">null</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color: rgb(156, 220, 254);">"uuid"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);">&nbsp;</span><span class="colour" style="color: rgb(206, 145, 120);">"1ebe22e4-77af-6e8c-8610-00155daab927"</span><br>
<span class="colour" style="color: rgb(220, 220, 220);">}</span></p>


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Content-Type  |  application/x-www-form-urlencoded | 是  |   |   |
| Authorization  |   | 是  |  Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |  用户Token |
**Body**

| 参数名称  | 参数类型  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| contacts | text  |  是 |    |  联系方式 |
| content | text  |  是 |    |  反馈内容 |



### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> scalar</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
# 用户服务

## 修改资料
<a id=修改资料> </a>
### 基本信息

**Path：** /user/edit

**Method：** POST

**接口描述：**


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Content-Type  |  application/json | 是  |   |   |
| Authorization  |   | 是  |  Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |  用户Token |
**Body**

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> area_id</span></td><td key=1><span>integer</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区ID</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> avatar</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">头像地址</span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> nickname</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">昵称</span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> sex</span></td><td key=1><span>integer</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">性别 0:保密 1:男 2:女</span></td><td key=5></td></tr><tr key=0-4><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> birthday</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">生日（年-月-日）</span></td><td key=5></td></tr><tr key=0-5><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> contact</span></td><td key=1><span>object</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">联系方式(可扩展更多)</span></td><td key=5></td></tr><tr key=0-5-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> wechat</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">微信号</span></td><td key=5></td></tr><tr key=0-5-1><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> phone</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">手机号</span></td><td key=5></td></tr><tr key=0-5-2><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> qq</span></td><td key=1><span>string</span></td><td key=2>非必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">QQ</span></td><td key=5></td></tr>
               </tbody>
              </table>
            
### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody">
               </tbody>
              </table>
            
## 公众号登录回调
<a id=公众号登录回调> </a>
### 基本信息

**Path：** /user/official

**Method：** GET

**接口描述：**


### 请求参数
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| code | 是  |   |  编码 |
| state | 否  |   |  状态 |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-1><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> nickname</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">用户昵称</span></td><td key=5></td></tr><tr key=0-0-2><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> sex</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">性别;0:保密,1:男,2:女</span></td><td key=5></td></tr><tr key=0-0-3><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> birthday</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">生日</span></td><td key=5></td></tr><tr key=0-0-4><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> avatar</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">头像</span></td><td key=5></td></tr><tr key=0-0-5><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> area_id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区ID</span></td><td key=5></td></tr><tr key=0-0-6><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> merger_name</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区名称</span></td><td key=5></td></tr><tr key=0-0-7><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> api_token</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">token</span></td><td key=5></td></tr><tr key=0-0-8><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> contact</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">联系方式</span></td><td key=5></td></tr><tr key=0-0-8-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> wechat</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">微信号</span></td><td key=5></td></tr><tr key=0-0-8-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> phone</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">手机号</span></td><td key=5></td></tr><tr key=0-0-9><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> third</span></td><td key=1><span>object []</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方信息</span></td><td key=5><p key=3><span style="font-weight: '700'">item 类型: </span><span>object</span></p></td></tr><tr key=0-0-9-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-9-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> logins_number</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">登录次数</span></td><td key=5></td></tr><tr key=0-0-9-2><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> source</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方标识</span></td><td key=5></td></tr><tr key=0-0-9-3><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> login_ip</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">本次登录IP</span></td><td key=5></td></tr><tr key=0-0-9-4><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> created_at</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">注册时间</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 微信小程序登录
<a id=微信小程序登录> </a>
### 基本信息

**Path：** /user/applets

**Method：** GET

**接口描述：**
<p>参数说明详见<br>
<a href="https://developers.weixin.qq.com/miniprogram/dev/api/open-api/login/wx.login.html">wx.login\(Object object\) | 微信开放文档 \(qq.com\)</a><br>
调用wx.login获取code后传给后端<br>
示例：<br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(192, 192, 192)">wx</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(255, 165, 79)">login</span><span class="colour" style="color:rgb(220, 220, 220)">(</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(255, 165, 79)">success</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(250, 128, 114)">loginRes</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(247, 228, 90)">=&gt;</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(102, 202, 255)">this</span><span class="colour" style="color:rgb(137, 221, 255)">.get</span><span class="colour" style="color:rgb(220, 220, 220)">(</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;url</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">'</span><span class="colour" style="color:rgb(250, 128, 114)">user/applets</span><span class="colour" style="color:rgb(137, 221, 255)">',</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data</span><span class="colour" style="color:rgb(137, 221, 255)">:{</span><span class="colour" style="color:rgb(220, 220, 220)">code</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(192, 192, 192)">loginRes</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(192, 192, 192)">code</span><span class="colour" style="color:rgb(137, 221, 255)">},</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(255, 165, 79)">success</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(250, 128, 114)">res</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(247, 228, 90)">=&gt;</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">if</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;(</span><span class="colour" style="color:rgb(192, 192, 192)">res</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(192, 192, 192)">code</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(247, 228, 90)">==</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(250, 128, 114)">200</span><span class="colour" style="color:rgb(220, 220, 220)">)&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(102, 202, 255)">this</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(192, 192, 192)">globalData</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(192, 192, 192)">userInfo</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(247, 228, 90)">=</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(192, 192, 192)">res</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(192, 192, 192)">data</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">}</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">else</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(192, 192, 192)">wx</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(255, 165, 79)">showToast</span><span class="colour" style="color:rgb(220, 220, 220)">(</span><span class="colour" style="color:rgb(137, 221, 255)">{</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;title</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(192, 192, 192)">res</span><span class="colour" style="color:rgb(137, 221, 255)">.</span><span class="colour" style="color:rgb(192, 192, 192)">msg</span><span class="colour" style="color:rgb(137, 221, 255)">,</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icon</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">'</span><span class="colour" style="color:rgb(250, 128, 114)">none</span><span class="colour" style="color:rgb(137, 221, 255)">'</span><span class="colour" style="color:rgb(137, 221, 255)">,</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;duration</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(250, 128, 114)">3000</span><span class="colour" style="color:rgb(137, 221, 255)">,</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mask</span><span class="colour" style="color:rgb(137, 221, 255)">:</span><span class="colour" style="color:rgb(220, 220, 220)">&nbsp;</span><span class="colour" style="color:rgb(250, 128, 114)">false</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">}</span><span class="colour" style="color:rgb(220, 220, 220)">)</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">}</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">},</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">}</span><span class="colour" style="color:rgb(220, 220, 220)">)</span><span class="colour" style="color:rgb(137, 221, 255)">;</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">},</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="colour" style="color:rgb(137, 221, 255)">}</span><span class="colour" style="color:rgb(220, 220, 220)">)</span></p>


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Content-Type  |  application/x-www-form-urlencoded | 是  |   |   |
| appid  |   | 是  |   |  小程序APPID |
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| code | 是  |   |  用户登录凭证（有效期五分钟） |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-1><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> nickname</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">用户昵称</span></td><td key=5></td></tr><tr key=0-0-2><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> sex</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">性别;0:保密,1:男,2:女</span></td><td key=5></td></tr><tr key=0-0-3><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> birthday</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">生日</span></td><td key=5></td></tr><tr key=0-0-4><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> avatar</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">头像</span></td><td key=5></td></tr><tr key=0-0-5><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> area_id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区ID</span></td><td key=5></td></tr><tr key=0-0-6><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> merger_name</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区名称</span></td><td key=5></td></tr><tr key=0-0-7><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> api_token</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">token</span></td><td key=5></td></tr><tr key=0-0-8><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> contact</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">联系方式</span></td><td key=5></td></tr><tr key=0-0-8-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> wechat</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">微信号</span></td><td key=5></td></tr><tr key=0-0-8-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> phone</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">手机号</span></td><td key=5></td></tr><tr key=0-0-9><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> third</span></td><td key=1><span>object []</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方信息</span></td><td key=5><p key=3><span style="font-weight: '700'">item 类型: </span><span>object</span></p></td></tr><tr key=0-0-9-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-9-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> logins_number</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">登录次数</span></td><td key=5></td></tr><tr key=0-0-9-2><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> source</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方标识</span></td><td key=5></td></tr><tr key=0-0-9-3><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> login_ip</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">本次登录IP</span></td><td key=5></td></tr><tr key=0-0-9-4><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> created_at</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">注册时间</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 微信扫码登录回调
<a id=微信扫码登录回调> </a>
### 基本信息

**Path：** /user/wechat

**Method：** GET

**接口描述：**


### 请求参数
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| code | 是  |   |  编码 |
| state | 否  |   |  状态 |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-1><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> nickname</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">用户昵称</span></td><td key=5></td></tr><tr key=0-0-2><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> sex</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">性别;0:保密,1:男,2:女</span></td><td key=5></td></tr><tr key=0-0-3><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> birthday</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">生日</span></td><td key=5></td></tr><tr key=0-0-4><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> avatar</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">头像</span></td><td key=5></td></tr><tr key=0-0-5><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> area_id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区ID</span></td><td key=5></td></tr><tr key=0-0-6><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> merger_name</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区名称</span></td><td key=5></td></tr><tr key=0-0-7><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> api_token</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">token</span></td><td key=5></td></tr><tr key=0-0-8><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> contact</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">联系方式</span></td><td key=5></td></tr><tr key=0-0-8-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> wechat</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">微信号</span></td><td key=5></td></tr><tr key=0-0-8-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> phone</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">手机号</span></td><td key=5></td></tr><tr key=0-0-9><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> third</span></td><td key=1><span>object []</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方信息</span></td><td key=5><p key=3><span style="font-weight: '700'">item 类型: </span><span>object</span></p></td></tr><tr key=0-0-9-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-9-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> logins_number</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">登录次数</span></td><td key=5></td></tr><tr key=0-0-9-2><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> source</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方标识</span></td><td key=5></td></tr><tr key=0-0-9-3><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> login_ip</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">本次登录IP</span></td><td key=5></td></tr><tr key=0-0-9-4><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> created_at</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">注册时间</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 用户详情
<a id=用户详情> </a>
### 基本信息

**Path：** /user/info

**Method：** GET

**接口描述：**
<p><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"data"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"id"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">1</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"nickname"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"17198899881"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"sex"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">1</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"avatar"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"<a href="https://cdn.shanwo.cc/local/picture/2021/06/ec76377352f.jpg">https://cdn.shanwo.cc/local/picture/2021/06/ec76377352f.jpg</a>"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"area_id"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">3</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"merger_name"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"北京-北京市-东城区"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"contact"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"wechat"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"wzxaini_9"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"phone"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"17198899881"</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">},</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"updated_at"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"2021-07-19 16:14:13"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"created_at"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"2021-06-20 02:45:54"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"third"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">[</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"id"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">1</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"logins_number"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">1</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"source"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"wechat"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"login_ip"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"127.0.0.1"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"created_at"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"2021-07-19 16:11:54"</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">},</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">{</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"id"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">2</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"logins_number"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">1</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"source"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"qq"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"login_ip"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"127.0.0.1"</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"created_at"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"2021-07-19 16:12:24"</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">}</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">]</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(220, 220, 220)">},</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"code"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(181, 206, 168)">200</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"msg"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">null</span><span class="colour" style="color:rgb(220, 220, 220)">,</span><br>
<span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(156, 220, 254)">"uuid"</span><span class="colour" style="color:rgb(220, 220, 220)">:</span><span class="colour" style="color:rgb(212, 212, 212)"></span><span class="colour" style="color:rgb(206, 145, 120)">"1ebe8695-1840-66d0-a4ed-00155d652af7"</span><br>
<span class="colour" style="color:rgb(220, 220, 220)">}</span></p>


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Authorization  |   | 是  |  Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |  用户Token |
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| id | 否  |   |  用户ID（不传查看自己，传入查看对应用户） |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-1><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> nickname</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">用户昵称</span></td><td key=5></td></tr><tr key=0-0-2><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> sex</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">性别;0:保密,1:男,2:女</span></td><td key=5></td></tr><tr key=0-0-3><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> avatar</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">头像</span></td><td key=5></td></tr><tr key=0-0-4><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> area_id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区ID</span></td><td key=5></td></tr><tr key=0-0-5><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> merger_name</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">省市区名称</span></td><td key=5></td></tr><tr key=0-0-6><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> contact</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">联系信息</span></td><td key=5></td></tr><tr key=0-0-6-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> wechat</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">微信</span></td><td key=5></td></tr><tr key=0-0-6-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> phone</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">手机号</span></td><td key=5></td></tr><tr key=0-0-7><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> updated_at</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">更新时间</span></td><td key=5></td></tr><tr key=0-0-8><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> created_at</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">创建时间</span></td><td key=5></td></tr><tr key=0-0-9><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> third</span></td><td key=1><span>object []</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">三方信息</span></td><td key=5><p key=3><span style="font-weight: '700'">item 类型: </span><span>object</span></p></td></tr><tr key=0-0-9-0><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> id</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-9-1><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> logins_number</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">登录次数</span></td><td key=5></td></tr><tr key=0-0-9-2><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> source</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">来源类型</span></td><td key=5></td></tr><tr key=0-0-9-3><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> login_ip</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">最后登录IP</span></td><td key=5></td></tr><tr key=0-0-9-4><td key=0><span style="padding-left: 40px"><span style="color: #8c8a8a">├─</span> created_at</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap">创建时间</span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 登录/绑定
<a id=登录/绑定> </a>
### 基本信息

**Path：** /user/signIn

**Method：** GET

**接口描述：**
<p><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">    </span><span class="colour" style="color: rgb(156, 220, 254);">"data"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);"> </span><span class="colour" style="color: rgb(220, 220, 220);">{</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">        </span><span class="colour" style="color: rgb(156, 220, 254);">"redirect_url"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);"> </span><span class="colour" style="color: rgb(206, 145, 120);">"<a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx7e75f9d4dac3553a&redirect_uri=http://shanwo.cc&response_type=code&scope=snsapi_login&state=0cbbb5571595861e2fb6a70e14f9410a&connect_redirect=1#wechat_redirect">https://open.weixin.qq.com/connect/qrconnect?appid=wx7e75f9d4dac3553a&redirect_uri=http://shanwo.cc&response_type=code&scope=snsapi_login&state=0cbbb5571595861e2fb6a70e14f9410a&connect_redirect=1#wechat_redirect</a>"</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">    </span><span class="colour" style="color: rgb(220, 220, 220);">},</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">    </span><span class="colour" style="color: rgb(156, 220, 254);">"code"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);"> </span><span class="colour" style="color: rgb(181, 206, 168);">200</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">    </span><span class="colour" style="color: rgb(156, 220, 254);">"msg"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);"> </span><span class="colour" style="color: rgb(206, 145, 120);">null</span><span class="colour" style="color: rgb(220, 220, 220);">,</span><br>
<span class="colour" style="color: rgb(212, 212, 212);">    </span><span class="colour" style="color: rgb(156, 220, 254);">"uuid"</span><span class="colour" style="color: rgb(220, 220, 220);">:</span><span class="colour" style="color: rgb(212, 212, 212);"> </span><span class="colour" style="color: rgb(206, 145, 120);">"1ec2cc5a-7802-60d2-97f7-00155d5fd794"</span><br>
<span class="colour" style="color: rgb(220, 220, 220);">}</span></p>


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Content-Type  |  application/x-www-form-urlencoded | 是  |   |   |
**Query**

| 参数名称  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ |
| type | 是  |  wechat |  三方账号类型：（已开通：official，wechat） |
| secret | 否  |   |  账号绑定签名 |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody"><tr key=0-0><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> data</span></td><td key=1><span>object</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-0-0><td key=0><span style="padding-left: 20px"><span style="color: #8c8a8a">├─</span> redirect_url</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-1><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> code</span></td><td key=1><span>number</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-2><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> msg</span></td><td key=1><span>null</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr><tr key=0-3><td key=0><span style="padding-left: 0px"><span style="color: #8c8a8a"></span> uuid</span></td><td key=1><span>string</span></td><td key=2>必须</td><td key=3></td><td key=4><span style="white-space: pre-wrap"></span></td><td key=5></td></tr>
               </tbody>
              </table>
            
## 退出登录
<a id=退出登录> </a>
### 基本信息

**Path：** /user/SignOut

**Method：** GET

**接口描述：**


### 请求参数
**Headers**

| 参数名称  | 参数值  |  是否必须 | 示例  | 备注  |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| Authorization  |   | 是  |  Bearer xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx |  用户Token |

### 返回数据

<table>
  <thead class="ant-table-thead">
    <tr>
      <th key=name>名称</th><th key=type>类型</th><th key=required>是否必须</th><th key=default>默认值</th><th key=desc>备注</th><th key=sub>其他信息</th>
    </tr>
  </thead><tbody className="ant-table-tbody">
               </tbody>
              </table>
            