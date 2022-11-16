<?php
/**
 * User: Powerless
 * Date: 22/11/16
 * Blog: https://wzxaini9.cn
 */

namespace App\Services;

class ProtocolService extends Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function info($appId,$type)
    {
        $info['name'] = '用户协议';
        $info['desc'] = '<p>
    SNOW VISION<span style="font-family: 宋体">是北京酷琪科贸有限公司</span>(<span style="font-family:宋体">以下简称酷琪科贸</span>)<span style="font-family:宋体">开发的小程序，为使用</span>SNOW VISION<span style="font-family:宋体">（以下简称“本程序”）及服务，你应当阅读并遵守《服务协议》（以下简称“本协议”）。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">请您务必审慎阅读、充分理解各条款内容，特别是免除或者限制责任的条款、管辖与法律适用条款，以及开通或使用某项服务的协议。除非您已阅读并接受本协议所有条款，否则你无权使用本程序及相关服务。你在享受</span>SNOW VISION<span style="font-family:宋体">任何单项服务时，应当受本协议的约束。如果您未满</span>18<span style="font-family:宋体">周岁，请在法定监护人的陪同下阅读本协议，并特别注意未成年人使用条款。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">一、协议的范围</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">本协议是你与酷琪科贸之间关于你使用、复制本程序，以及使用酷琪科贸相关软件和服务所订立的协议。“酷琪科贸”是指北京酷琪科贸有限公司及其相关服务可能存在的运营关联单位。“用户”是指使用酷琪科贸相关服务的使用人，在本协议中更多地称为“您”。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">二、服务内容</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">服务内容是指酷琪科贸向用户提供的小程序（即“</span>SNOW VISION<span style="font-family:宋体">”），支持单人、多人参与互动，提供包括但不限于网络媒体、互联网增值、互动娱乐、电子商务和广告等产品及服务（以下简称“本服务”）。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">三、用户个人信息保护</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.1 <span style="font-family:宋体">保护用户个人信息是酷琪科贸的一项基本原则，酷琪科贸将会采取合理的措施保护用户的个人信息。除法律法规规定的情形外，未经用户许可酷琪科贸不会向第三方公开、透露用户个人信息。酷琪科贸对相关信息采用专业加密存储与传输方式，保障用户个人信息的安全。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.2 <span style="font-family:宋体">你在注册帐号或使用本服务的过程中，需要提供一些必要的信息，例如：为向你提供帐号注册服务或进行用户身份识别，需要你填写手机号码。若国家法律法规或政策有特殊规定的，你需要提供真实的身份信息。若你提供的信息不完整，则无法使用本服务或在使用过程中受到限制。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.3 <span style="font-family:宋体">一般情况下，你可随时浏览、修改自己提交的信息，但出于安全性和身份识别（如号码申诉服务）的考虑，你可能无法修改注册时提供的初始注册信息及其他验证信息。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.4 <span style="font-family:宋体">酷琪科贸将运用各种安全技术和程序建立完善的管理制度来保护你的个人信息，以免遭受未经授权的访问、使用或披露。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.5 <span style="font-family:宋体">未经你的同意，酷琪科贸不会向酷琪科贸以外的任何公司、组织和个人披露你的个人信息，但法律法规另有规定的除外。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.6<span style="font-family:宋体">酷琪科贸非常重视对未成年人个人信息的保护。若您是</span>18<span style="font-family:宋体">周岁以下的未成年人，在使用酷琪科贸的服务前，应事先取得您家长或法定监护人（以下简称</span>&quot;<span style="font-family:宋体">监护人</span>&quot;<span style="font-family:宋体">）的书面同意。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3.7<span style="font-family:宋体">您在使用酷琪科贸或</span>SNOW VISION<span style="font-family:宋体">的服务时需要注册一个帐号。特别提醒您应妥善保管您的帐号和密码。当您使用完毕后，应安全退出。因您保管不善可能导致遭受盗号或密码失窃，责任由您自行承担。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">四、软件使用和用户行为规范</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、</span>SNOW VISION<span style="font-family:宋体">帐号可通过手机号码或微信进行注册，微信注册成功后需要绑定手机号。酷琪科贸有权根据用户需求或产品需要对帐号注册和绑定的方式进行变更，关于你使用帐号的具体规则，请遵守国家想着法律规定、相关帐号使用协议以及酷琪科贸为此发布的专项规则。</span>SNOW VISION<span style="font-family:宋体">帐号的所有权归酷琪科贸公司所有，用户完成申请注册手续后，仅获得</span>SNOW VISION<span style="font-family:宋体">帐号的使用权，且该使用权仅属于初始申请注册人。同时，初始申请注册人不得赠与、借用、租用、转让或售卖</span>SNOW VISION<span style="font-family:宋体">帐号或者以其他方式许可非初始申请注册人使用</span>SNOW VISION<span style="font-family:宋体">帐号。非初始申请注册人不得通过受赠、继承、承租、受让或者其他任何方式使用</span>SNOW VISION<span style="font-family:宋体">帐号。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、用户有责任妥善保管注册帐户信息及帐户密码的安全，用户需要对注册帐户以及密码下的行为承担法律责任。用户同意在任何情况下不向他人透露帐户及密码信息。当在你怀疑他人在使用你的帐号时，你应立即通知酷琪科贸公司。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、你理解并同意：为了向你提供有效的服务，本程序会利用你终端设备的处理器和带宽等资源。本程序使用过程中可能产生数据流量的费用，用户需自行向运营商了解相关资费信息，并自行承担相关费用。本程序的某些功能可能会让第三方知晓用户的信息。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">、你理解并同意：酷琪科贸将会尽其商业上的合理努力保障你在本程序及服务中的数据存储安全，但是，酷琪科贸并不能就此提供完全保证，包括但不限于以下情形：酷琪科贸不对你在本程序及服务中相关数据的删除或储存失败负责；酷琪科贸有权根据实际情况自行决定单个用户在本程序及服务中数据的最长储存期限，并在服务器上为其分配数据最大存储空间等。你可根据自己的需要自行备份本程序及服务中的相关数据；如果你停止使用本程序及服务或服务被终止或取消，酷琪科贸可以从服务器上永久地删除你的数据。服务停止、终止或取消后，酷琪科贸没有义务向你返还任何数据。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    5<span style="font-family:宋体">、用户在使用本程序及服务时，须自行承担如下来自酷琪科贸不可掌控的风险内容，包括但不限于：由于不可抗拒因素可能引起的个人信息丢失、泄漏等风险；用户在使用本程序访问第三方网站时，因第三方网站及相关内容所可能导致的风险，由用户自行承担；用户提交的内容被他人转发、分享，因此等传播可能带来的风险和责任；由于无线网络信号不稳定、无线网络带宽小等原因，所引起的登录失败、资料同步不完整、页面打开速度慢等风险。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    6<span style="font-family:宋体">、你在使用本程序第三方提供的产品或服务时，除遵守本协议约定外，还应遵守第三方的用户协议。酷琪科贸和第三方对可能出现的纠纷在法律规定和约定的范围内各自承担责任。因用户使用本程序或要求酷琪科贸提供特定服务时，本程序可能会调用第三方系统或者通过第三方支持用户的使用或访问，使用或访问的结果由该第三方提供（包括但不限于第三方通过</span>SNOW VISION<span style="font-family:宋体">帐号提供的服务，或通过开放平台接入的内容等），酷琪科贸不保证通过第三方提供服务及内容的安全性、准确性、有效性及其他不确定的风险，由此若引发的任何争议及损害，与酷琪科贸无关，酷琪科贸不承担任何责任。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    7<span style="font-family:宋体">、你理解并同意，酷琪科贸有权决定将本程序作商业用途，包括但不限于开发、使用本程序的部分服务为第三方作推广等，酷琪科贸承诺在推广过程中严格按照本协议约定保护你的个人信息，同时你亦可以根据系统设置选择屏蔽、拒绝接收相关推广信息。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    8<span style="font-family:宋体">、信息内容规范：本条所述信息内容是指用户使用本程序及服务过程中所制作、复制、发布、传播的任何内容，包括但不限于</span>SNOW VISION<span style="font-family:宋体">帐号头像、名字、用户说明等注册信息，或文字、视频、图片等发送、回复、图文和相关链接页面，以及其他使用</span>SNOW VISION<span style="font-family:宋体">帐号或本程序及服务所产生的内容。你理解并同意，</span>SNOW VISION<span style="font-family:宋体">一直致力于为用户提供文明健康、规范有序的网络环境，你不得利用</span>SNOW VISION<span style="font-family:宋体">帐号或本程序及服务制作、复制、发布、传播如下干扰</span>SNOW VISION<span style="font-family:宋体">正常运营，以及侵犯其他用户或第三方合法权益的内容，包括但不限于：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">）发布、传送、传播、储存违反国家法律法规禁止的内容：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">）发布、传送、传播、储存侵害他人名誉权、肖像权、知识产权、商业秘密等合法权利的内容；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">）涉及他人隐私、个人信息或资料的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">）其他违反法律法规、政策及公序良俗、社会公德或干扰</span>SNOW VISION<span style="font-family:宋体">正常运营和侵犯其他用户或第三方合法权益内容的信息。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    9<span style="font-family:宋体">、除非法律允许或酷琪科贸书面许可，你使用本程序过程中不得从事下列行为：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">）删除本程序及其副本上关于著作权的信息；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">）对本程序进行反向工程、反向汇编、反向编译，或者以其他方式尝试发现本程序的源代码；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">）对酷琪科贸拥有知识产权的内容进行使用、出租、出借、复制、修改、链接、转载、汇编、发表、出版、建立镜像站点等；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">）对本程序或者本程序运行过程中释放到任何终端内存中的数据、软件运行过程中客户端与服务器端的交互数据，以及本程序运行所必需的系统数据，进行复制、修改、增加、删除、挂接运行或创作任何衍生作品，形式包括但不限于使用插件、外挂或非酷琪科贸经授权的第三方工具</span>/<span style="font-family:宋体">服务接入本程序和相关系统；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    5<span style="font-family:宋体">）通过修改或伪造软件运行中的指令、数据，增加、删减、变动软件的功能或运行效果，或者将用于上述用途的软件、方法进行运营或向公众传播，无论这些行为是否为商业目的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    6<span style="font-family:宋体">）通过非酷琪科贸开发、授权的第三方软件、插件、外挂、系统，登录或使用</span>SNOW VISION<span style="font-family:宋体">小程序及服务，或制作、发布、传播上述工具；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    7<span style="font-family:宋体">）自行或者授权他人、第三方软件对本程序及其组件、模块、数据进行干扰；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    8<span style="font-family:宋体">）其他未经酷琪科贸明示授权的行为。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    10<span style="font-family:宋体">、除非法律允许或酷琪科贸书面许可，你使用本服务过程中不得从事下列行为：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">）提交、发布虚假信息，或冒充、利用他人名义的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">）诱导其他用户点击链接页面或分享信息的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">）虚构事实、隐瞒真相以误导、欺骗他人的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">）侵害他人名誉权、肖像权、知识产权、商业秘密等合法权利的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    5<span style="font-family:宋体">）未经酷琪科贸书面许可利用</span>SNOW VISION<span style="font-family:宋体">帐号和任何功能，以及第三方运营平台进行推广或互相推广的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    6<span style="font-family:宋体">）利用</span>SNOW VISION<span style="font-family:宋体">帐号或本程序及服务从事任何违法犯罪活动的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    7<span style="font-family:宋体">）制作、发布与以上行为相关的方法、工具，或对此类方法、工具进行运营或传播，无论这些行为是否为商业目的；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    8<span style="font-family:宋体">）其他违反法律法规规定、侵犯其他用户合法权益、干扰产品正常运营或酷琪科贸未明示授权的行为。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    11<span style="font-family:宋体">、你充分了解并同意，你必须为自己注册帐号下的一切行为负责，包括你所发表的任何内容以及由此产生的任何后果。你应对本服务中的内容自行加以判断，并承担因使用内容而引起的所有风险，包括因对内容的正确性、完整性或实用性的依赖而产生的风险。酷琪科贸无法且不会对因前述风险而导致的任何损失或损害承担责任。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    12<span style="font-family:宋体">、如果酷琪科贸发现或收到他人举报或投诉用户违反本协议约定的，酷琪科贸有权不经通知随时对相关内容进行删除、屏蔽，并视行为情节对违规帐号处以包括但不限于警告、限制或禁止使用部分或全部功能、帐号封禁直至注销的处罚，并公告处理结果。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    13<span style="font-family:宋体">、你理解并同意，酷琪科贸有权依合理判断对违反有关法律法规或本协议规定的行为进行处罚，对违法违规的任何用户采取适当的法律行动，并依据法律法规保存有关信息向有关部门报告等，用户应独自承担由此而产生的一切法律责任。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    14<span style="font-family:宋体">、你理解并同意，因你违反本协议或相关服务条款的规定，导致或产生第三方主张的任何索赔、要求或损失，你应当独立承担责任；酷琪科贸因此遭受损失的，你也应当一并赔偿。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">五、知识产权声明</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、酷琪科贸是本程序的知识产权权利人。本程序的一切著作权、商标权、专利权、商业秘密等知识产权，以及与本程序相关的所有信息内容（包括但不限于文字、图片、音频、视频、图表、界面设计、版面框架、有关数据或电子文档等）均受中华人民共和国法律法规和相应的国际条约保护，酷琪科贸在本服务中所使用的“酷琪科贸”、“</span>SNOW VISION<span style="font-family:宋体">”等商业标识，其著作权或商标权归酷琪科贸所有。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、</span>SNOW VISION<span style="font-family:宋体">小程序中的所有照片或视频，无论是酷琪科贸上传提供或者用户上传提供，均不得侵犯其他任何第三方的专利权、著作权、商标权、名誉权、肖像权、隐私权、物权或其他任何合法权益。影像著作权归拍摄人所有，照片中主体自然人的肖像权归被拍摄个人所有。用户有权提出将上传的照片作品删除，在收到提交的删除申请后，</span>SNOW VISION<span style="font-family:宋体">将在合理期限内删除展示在</span>SNOW VISION<span style="font-family:宋体">的相应作品。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、在未经酷琪科贸或被拍摄人许可前，任何机构和个人不得将照片或视频用于商业目的。使用图片或视频过程中，用户不得侵犯他人肖像权。不得违反国家相关法律规定。严禁将图片或视频用于危害社会、国家、他人的用途。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">六、终端安全责任</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、你理解并同意，本程序同大多数互联网软件一样，可能会受多种因素影响，包括但不限于用户原因、网络服务质量、社会环境等；也可能会受各种安全问题的侵扰，包括但不限于他人非法利用用户资料，进行现实中的骚扰；用户下载安装的其他软件或访问的其他网站中可能含有病毒、木马程序或其他恶意程序，威胁你的终端设备信息和数据安全，继而影响本程序的正常使用等。因此，你应加强信息安全及个人信息的保护意识，注意密码保护，以免遭受损失。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、你不得制作、发布、使用、传播用于窃取</span>SNOW VISION<span style="font-family:宋体">帐号及他人个人信息、财产的恶意程序。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、维护软件安全与正常使用是酷琪科贸和你的共同责任，酷琪科贸将按照行业标准合理审慎地采取必要技术措施保护你的终端设备信息和数据安全，但是你承认和同意酷琪科贸并不能就此提供完全保证。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">、在任何情况下，你不应轻信借款、索要密码或其他涉及财产的网络信息。涉及财产操作的，请一定先核实对方身份，并请经常留意酷琪科贸有关防范诈骗犯罪的提示。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">七、第三方软件或技术</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、本程序可能会使用第三方软件或技术（包括本程序可能使用的开源代码和公共领域代码等，下同），这种使用已经获得合法授权。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、本程序如果使用了第三方的软件或技术，酷琪科贸将按照相关法规或约定，对相关的协议或其他文件，可能通过本协议附件、在本程序安装包特定文件夹中打包、或通过开源软件页面等形式进行展示，它们可能会以“软件使用许可协议”、“授权协议”、“开源代码许可证”或其他形式来表达。前述通过各种形式展现的相关协议、其他文件及网页，均是本协议不可分割的组成部分，与本协议具有同等的法律效力，你应当遵守这些要求。如果你没有遵守这些要求，该第三方或者国家机关可能会对你提起诉讼、罚款或采取其他制裁措施，并要求酷琪科贸给予协助，你应当自行承担法律责任。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、如因本程序使用的第三方软件或技术引发的任何纠纷，应由该第三方负责解决，酷琪科贸不承担任何责任。酷琪科贸不对第三方软件或技术提供客服支持，若你需要获取支持，请与第三方联系。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">八、广告和收费</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、您同意酷琪科贸可以在提供服务的过程中自行或由第三方广告商向您发送广告、推广或宣传信息（包括商业与非商业信息），其方式和范围可不经向您特别通知而变更。酷琪科贸可能为您提供选择关闭广告信息的功能，但任何时候您都不得以本协议未明确约定或酷琪科贸未书面许可的方式屏蔽、过滤广告信息。酷琪科贸依照法律的规定对广告商履行相关义务，您应当自行判断广告信息的真实性并为自己的判断行为负责，除法律明确规定外，您因依该广告信息进行的交易或前述广告商提供的内容而遭受的损失或损害，酷琪科贸不承担责任。您同意，对酷琪科贸服务中出现的广告信息，您应审慎判断其真实性和可靠性，除法律明确规定外，您应对依该广告信息进行的交易负责。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、酷琪科贸的部分服务是以收费方式提供的，如您使用收费服务，请遵守相关的协议。酷琪科贸可能根据实际需要对收费服务的收费标准、方式进行修改和变更，酷琪科贸也可能会对部分免费服务开始收费。前述修改、变更或开始收费前，酷琪科贸将在相应服务页面进行通知或公告。如果您不同意上述修改、变更或付费内容，则应停止使用该服务。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">九、不可抗力及其他免责事由</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、您理解并同意，在使用本服务的过程中，可能会遇到不可抗力等风险因素，使本服务发生中断。不可抗力是指不能预见、不能克服并不能避免且对一方或双方造成重大影响的客观事件，包括但不限于自然灾害如洪水、地震、瘟疫流行和风暴等以及社会事件如战争、动乱、政府行为等。出现上述情况时，酷琪科贸将努力在第一时间与相关单位配合，及时进行修复，但是由此给您造成的损失酷琪科贸在法律允许的范围内免责。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、在法律允许的范围内，酷琪科贸对以下情形导致的服务中断或受阻不承担责任：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）受到计算机病毒、木马或其他恶意程序、黑客攻击的破坏；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>2<span style="font-family:宋体">）用户或酷琪科贸的电脑软件、系统、硬件和通信线路出现故障；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>3<span style="font-family:宋体">）用户操作不当；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>4<span style="font-family:宋体">）用户通过非酷琪科贸授权的方式使用本服务；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>5<span style="font-family:宋体">）其他酷琪科贸无法控制或合理预见的情形。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、您理解并同意，在使用本服务的过程中，可能会遇到网络信息或其他用户行为带来的风险，酷琪科贸不对任何信息的真实性、适用性、合法性承担责任，也不对因侵权行为给您造成的损害负责。这些风险包括但不限于：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）来自他人匿名或冒名的含有威胁、诽谤、令人反感或非法内容的信息；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>2<span style="font-family:宋体">）因使用本协议项下的服务，遭受他人误导、欺骗或其他导致或可能导致的任何心理、生理上的伤害以及经济上的损失；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>3<span style="font-family:宋体">）其他因网络信息或用户行为引起的风险。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">、您理解并同意，本服务并非为某些特定目的而设计，包括但不限于核设施、军事用途、医疗设施、交通通讯等重要领域。如果因为软件或服务的原因导致上述操作失败而带来的人员伤亡、财产损失和环境破坏等，酷琪科贸不承担法律责任。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    5<span style="font-family:宋体">、酷琪科贸依据本协议约定获得处理违法违规内容的权利，该权利不构成酷琪科贸的义务或承诺，酷琪科贸不能保证及时发现违法行为或进行相应处理。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    6<span style="font-family:宋体">、在任何情况下，您不应轻信借款、索要密码或其他涉及财产的网络信息。涉及财产操作的，请一定先核实对方身份，并请经常留意有关防范诈骗犯罪的提示。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">十、协议的生效与变更</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、您使用酷琪科贸的服务即视为您已阅读本协议并接受本协议的约束。酷琪科贸有权在必要时修改本协议条款。您可以在相关服务页面查阅最新版本的协议条款。本协议条款变更后，如果您继续使用酷琪科贸提供的软件或服务，即视为您已接受修改后的协议。如果您不接受修改后的协议，应当停止使用酷琪科贸提供的软件或服务。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、酷琪科贸可能会对服务内容进行变更，也可能会中断、中止或终止服务。您理解并同意，酷琪科贸有权自主决定经营策略。在酷琪科贸发生合并、分立、收购、资产转让时，酷琪科贸可向第三方转让本服务下相关资产；酷琪科贸也可在单方通知您后，将本协议下部分或全部服务转交由第三方运营或履行。具体受让主体以酷琪科贸通知的为准。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、如发生下列任何一种情形，酷琪科贸有权不经通知而中断或终止向您提供的服务：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）根据法律规定您应提交真实信息，而您提供的个人资料不真实、或与注册时信息不一致又未能提供合理证明；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>2<span style="font-family:宋体">）您违反相关法律法规或本协议的约定；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>3<span style="font-family:宋体">）按照法律规定或主管部门的要求；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>4<span style="font-family:宋体">）出于安全的原因或其他必要的情形。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">、酷琪科贸有权按本协议约定进行收费。若您未按时足额付费，酷琪科贸有权中断、中止或终止提供服务。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    5<span style="font-family:宋体">、您有责任自行备份存储在本服务中的数据。如果您的服务被终止，酷琪科贸可以从服务器上永久地删除您的数据</span>,<span style="font-family:宋体">但法律法规另有规定的除外。服务终止后，酷琪科贸没有义务向您返还数据。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">十一、管辖与法律适用</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、本协议的成立、生效、履行、解释及纠纷解决，适用中华人民共和国大陆地区法律（不包括冲突法）。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、本协议签订地为中华人民共和国北京市东城区。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、若您和酷琪科贸之间发生任何纠纷或争议，首先应友好协商解决；协商不成的，您同意将纠纷或争议提交本协议签订地（即中华人民共和国北京市东城区）有管辖权的人民法院管辖。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    4<span style="font-family:宋体">、本协议所有条款的标题仅为阅读方便，本身并无实际涵义，不能作为本协议涵义解释的依据。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    5<span style="font-family:宋体">、本协议条款无论因何种原因部分无效或不可执行，其余条款仍有效，对双方具有约束力。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">十二、未成年人使用条款</span>
</p>
<p>
    &nbsp;
</p>
<p>
    1<span style="font-family:宋体">、若用户未满</span>18<span style="font-family:宋体">周岁，则为未成年人，应在监护人监护、指导下阅读本协议和使用本服务。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    2<span style="font-family:宋体">、未成年人用户涉世未深，容易被网络虚象迷惑，且好奇心强，遇事缺乏随机应变的处理能力，很容易被别有用心的人利用而又缺乏自我保护能力。因此，未成年人用户在使用本服务时应注意以下事项，提高安全意识，加强自我保护：</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>1<span style="font-family:宋体">）认清网络世界与现实世界的区别，避免沉迷于网络，影响日常的学习生活；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>2<span style="font-family:宋体">）填写个人资料时，加强个人保护意识，以免不良分子对个人生活造成骚扰；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>3<span style="font-family:宋体">）在监护人或老师的指导下，学习正确使用网络；</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">（</span>4<span style="font-family:宋体">）避免陌生网友随意会面或参与联谊活动，以免不法分子有机可乘，危及自身安全。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    3<span style="font-family:宋体">、监护人、学校均应对未成年人使用本服务时多做引导。特别是家长应关心子女的成长，注意与子女的沟通，指导子女上网应该注意的安全问题，防患于未然。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">十三、其他</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">如果您对本协议或本服务有意见或建议，可与酷琪科贸联系，我们会给予您必要的帮助。</span>
</p>
<p>
    &nbsp;
</p>
<p>
    <span style="font-family:宋体">本协议的最终解释权归北京酷琪科贸有限公司所有。</span>
</p>
<p>
    <br/>
</p>';
        return $info;
    }
}