require "import"
import "android.app.*"
import "android.os.*"
import "android.widget.*"
import "android.view.*"
import "AndLua"
import "http"
import "android.content.Context"
import "android.content.Intent"
import "android.provider.Settings"
import "android.net.Uri"
import "android.content.pm.PackageManager"
import "android.graphics.Typeface"



layout={
  LinearLayout;
  background="https://raw.githubusercontent.com/duchan94/haitunfree/main/bg.jpg";
  {
    LinearLayout;
    orientation="vertical";
    layout_width="-1";
    gravity="center";
    layout_height="-1";
    {
      LinearLayout;
      layout_height="5%h";
      layout_width="-1";
    };
    {
      Button;
      layout_height="7%h";
      layout_width="60%w";
      id="showhack";
      text="开启视距";
      textColor="0xffffffff";
    };
    {
      LinearLayout;
      layout_height="3%h";
      layout_width="-1";
    };
    {
      Button;
      layout_height="7%h";
      layout_width="60%w";
      id="startgame";
      text="打开游戏";
      textColor="0xffffffff";
    };
    {
      LinearLayout;
      layout_height="3%h";
      layout_width="-1";
    };
    {
      Button;
      layout_height="7%h";
      layout_width="60%w";
      id="tt";
      text="加入Q群";
      textColor="0xffffffff";
    };

  };
};

activity.setContentView(loadlayout(layout))


-----------------

minlay={
  LinearLayout;
  layout_width="40dp";
  layout_height="400dp";
  {
    ImageView;
    layout_width="50dp";
    src="https://raw.githubusercontent.com/duchan94/haitunfree/main/float_icon.png";
    id="Win_minWindow";
    layout_height="50dp";
  };
};

winlay={
  LinearLayout,
  layout_width="-1",
  layout_height="-1",
  background="transparent",
  {
    CardView,
    id="win_mainview",
    layout_width="60%w",
    layout_height="35%h";
    layout_margin="5dp",
    CardElevation="5dp",
    {
      LinearLayout;
      orientation="vertical";
      layout_width="fill_parent";
      background="transparent",

      {
        LinearLayout;
        layout_width="fill_parent";
        background="transparent";
        gravity="center";
        {
          LinearLayout;
          orientation="vertical";
          layout_height="wrap";
          layout_width="-1";
          gravity="center";
          background="transparent",
          id="win_move1";
          padding="10";

          {
            LinearLayout;
            orientation="horizontal";
            layout_width="-1";
            layout_height="fill";
            gravity="center_vertical|center_horizontal";
            padding="5";
            {
              ImageView;

              id="close";
              translationX="20dp";
              layout_height="7.5%h";
              layout_width="11%w";
              colorFilter="#fffffff";
              src="close.png",

            };
            {
              LinearLayout;
              layout_width="4%w";
              layout_height="wrap";
            };
            {
              LinearLayout;
              orientation="vertical";
              gravity="center_horizontal|center_vertical";
              {
                TextView;
                text="     Q群922434            ";
                id="win_move2",
                textSize="20dp";
                textColor="#00FFFF";
              },

            };
            {


              ImageView,
              translationX="-20dp";
              layout_height="7.5%h";
              layout_width="11%w";
              id="changeWindow";
              src="min.png",
            };
          };
        };
      };
      {
        PageView,
        id="pg",
        layout_width="fill",
        layout_height="fill",
        pages={
          {
            LinearLayout;
            orientation="vertical";
            {
              ScrollView;
              layout_width="fill_parent";
              layout_height="23%h",
              layout_gravity="center_horizontal";
              {
                LinearLayout;
                layout_height="-1";
                layout_width="-1";
                orientation="vertical";
                {
                  LinearLayout;
                  id="_drawer_header";
                  layout_height="-2";
                  layout_width="-1";
                  orientation="vertical";
                  {
                    LinearLayout;
                    layout_height="-1";
                    layout_width="-1";
                    orientation="vertical";
                    padding="5";
                    {
                      LinearLayout;
                      orientation="horizontal";
                      layout_height="1%h";
                      layout_width="-1";
                    };
                    --
                    --
                    --
                    {
                      ToggleButton;
                      layout_width="-1";
                      layout_height="wrap";
                      textColor="0xFFFFFFFF";
                      id="Fiture1";
                      text="关闭视距";
                      textOn="关闭视距";
                      textOff="关闭视距";
                      textSize="14dp";
                      backgroundColor="0xFF000000";
                    };
                    {
                      LinearLayout;
                      layout_width="fill";
                      layout_height="0.2%h";
                    };
                    --
                    {
                      ToggleButton;
                      layout_width="-1";
                      layout_height="wrap";
                      textColor="0xFFFFFFFF";
                      id="Fiture2";
                      text="1倍视距";
                      textOn="1倍视距";
                      textOff="1倍视距";
                      textSize="14dp";
                      backgroundColor="0xFF000000";
                    };
                    {
                      LinearLayout;
                      layout_width="fill";
                      layout_height="0.2%h";
                    };
                    --
                    {
                      ToggleButton;
                      layout_width="-1";
                      layout_height="wrap";
                      textColor="0xFFFFFFFF";
                      id="Fiture3";
                      text="1.5倍视距";
                      textOn="1.5倍视距";
                      textOff="1.5倍视距";
                      textSize="14dp";
                      backgroundColor="0xFF000000";
                    };
                    {
                      LinearLayout;
                      layout_width="fill";
                      layout_height="0.2%h";
                    };
                    {
                      ToggleButton;
                      layout_width="-1";
                      layout_height="wrap";
                      textColor="0xFFFFFFFF";
                      id="Fiture4";
                      text="2倍视距";
                      textOn="2倍视距";
                      textOff="2倍视距";
                      textSize="14dp";
                      backgroundColor="0xFF000000";
                    };
                  };
                };
              };
            };
          };
        };
      };
    };
  };
}



LayoutVIP=activity.getSystemService(Context.WINDOW_SERVICE)
HasFocus=false
WmHz =WindowManager.LayoutParams()
if Build.VERSION.SDK_INT >= 26 then WmHz.type =WindowManager.LayoutParams.TYPE_APPLICATION_OVERLAY
 else WmHz.type =WindowManager.LayoutParams.TYPE_SYSTEM_ALERT
end
import "android.graphics.PixelFormat"
WmHz.format =PixelFormat.RGBA_8888
WmHz.flags=WindowManager.LayoutParams().FLAG_NOT_FOCUSABLE
WmHz.gravity = Gravity.LEFT| Gravity.TOP
WmHz.x = 333
WmHz.y = 333
WmHz.width = WindowManager.LayoutParams.WRAP_CONTENT
WmHz.height = WindowManager.LayoutParams.WRAP_CONTENT
mainWindow = loadlayout(winlay)
minWindow = loadlayout(minlay)
function close.onClick(v)
  HasLaunch=false
  LayoutVIP.removeView(mainWindow)
end
isMax=true
function changeWindow.onClick()
  if isMax==false then
    isMax=true
    LayoutVIP.removeView(minWindow)
    LayoutVIP.addView(mainWindow,WmHz)
   else
    isMax=false
    LayoutVIP.removeView(mainWindow)
    LayoutVIP.addView(minWindow,WmHz)
  end end
function Win_minWindow.onClick(v)
  if isMax==false then
    isMax=true
    LayoutVIP.removeView(minWindow)
    LayoutVIP.addView(mainWindow,WmHz)
   else
    isMax=false
    LayoutVIP.removeView(mainWindow)
    LayoutVIP.addView(minWindow,WmHz)
  end end
function Win_minWindow.OnTouchListener(v,event)
  if event.getAction()==MotionEvent.ACTION_DOWN then
    firstX=event.getRawX()
    firstY=event.getRawY()
    wmX=WmHz.x
    wmY=WmHz.y
   elseif event.getAction()==MotionEvent.ACTION_MOVE then
    WmHz.x=wmX+(event.getRawX()-firstX)
    WmHz.y=wmY+(event.getRawY()-firstY)
    LayoutVIP.updateViewLayout(minWindow,WmHz)
   elseif event.getAction()==MotionEvent.ACTION_UP then
  end return false end
function win_move1.OnTouchListener(v,event)
  if event.getAction()==MotionEvent.ACTION_DOWN then
    firstX=event.getRawX()
    firstY=event.getRawY()
    wmX=WmHz.x
    wmY=WmHz.y
   elseif event.getAction()==MotionEvent.ACTION_MOVE then
    WmHz.x=wmX+(event.getRawX()-firstX)
    WmHz.y=wmY+(event.getRawY()-firstY)
    LayoutVIP.updateViewLayout(mainWindow,WmHz)
   elseif event.getAction()==MotionEvent.ACTION_UP then
  end return true end
function win_move2.OnTouchListener(v,event)
  if event.getAction()==MotionEvent.ACTION_DOWN then
    firstX=event.getRawX()
    firstY=event.getRawY()
    wmX=WmHz.x
    wmY=WmHz.y
   elseif event.getAction()==MotionEvent.ACTION_MOVE then
    WmHz.x=wmX+(event.getRawX()-firstX)
    WmHz.y=wmY+(event.getRawY()-firstY)
    LayoutVIP.updateViewLayout(mainWindow,WmHz)
   elseif event.getAction()==MotionEvent.ACTION_UP then
  end return true end
pg.addOnPageChangeListener{
  onPageScrolled=function(a,b,c)
  end,
  onPageSelected=function(page)
  end,
  onPageScrollStateChanged=function(state)
  end,}



showhack.onClick=function()
  if HasLaunch==true then return else
    if Settings.canDrawOverlays(activity) then else intent=Intent("android.settings.action.MANAGE_OVERLAY_PERMISSION");
      intent.setData(Uri.parse("package:" .. this.getPackageName())); this.startActivity(intent); end HasLaunch=true
    local ret={pcall(function() LayoutVIP.addView(mainWindow,WmHz) end)}
    if ret[1]==false then end end import "java.io.*" file,err=io.open("/data/data/andlua.layout.vip/files/Memory")
  if err==nil then 打开app("andlua.layout.vip") else end end

function startgame.onClick()
  this.startActivity(activity.getPackageManager().getLaunchIntentForPackage("com.riotgames.league.wildrift"));
end

function tt.onClick()
  url = "https://jq.qq.com/?_wv=1027&k=l3AGAIcu"
  activity.startActivity(Intent(Intent.ACTION_VIEW, Uri.parse(url)))
end



function CircleButtonZ(view,InsideColor,radiu,InsideColor1)
  import "android.graphics.drawable.GradientDrawable"
  drawable = GradientDrawable()
  drawable.setShape(GradientDrawable.RECTANGLE)
  drawable.setCornerRadii({radiu, radiu, radiu, radiu, radiu, radiu, radiu, radiu})
  drawable.setColor(InsideColor)
  drawable.setStroke(3, InsideColor1)
  view.setBackgroundDrawable(drawable)
end

CircleButtonZ(win_mainview,0xBC006A00,80,0x00000000)
CircleButtonZ(showhack,0xA6FF0000,360,0xffffffff)
CircleButtonZ(startgame,0xA6FF0000,360,0xffffffff)
CircleButtonZ(tt,0xA6FF0000,360,0xffffffff)
win_move2.setTypeface(Typeface.DEFAULT_BOLD)




function root(Patch1,MRDmod)
  local check,hgm,number=os.execute("su") if check == true HGM=("su -c ") t1.Text=("ROOT") else HGM=("") t1.Text=("NOROOT") end path=activity.getLuaDir("res.utf") dpath=activity.getLuaDir() pass=("dcihngnod") if zip4j.unZipDir(path,dpath,pass)==true then Patch2=activity.getLuaDir(Patch1) os.execute(HGM.."chmod 777 "..Patch2) Runtime.getRuntime().exec(HGM..""..Patch2)MD提示(MRDmod,"#FF009DFF","#FFFFFFFF","9","50") end
end

--
--
--


function Fiture1.OnCheckedChangeListener()
  root("res/x0_off","Active")
end

function Fiture2.OnCheckedChangeListener()
  root("res/x1_on","Active")
end

function Fiture3.OnCheckedChangeListener()
  root("res/x1.5_on","Active")
end

function Fiture4.OnCheckedChangeListener()
  root("res/x2_on","Active")
end
