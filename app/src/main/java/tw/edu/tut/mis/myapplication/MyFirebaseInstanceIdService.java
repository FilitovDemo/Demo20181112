package tw.edu.tut.mis.myapplication;

import android.util.Log;

import com.google.firebase.iid.FirebaseInstanceId;
import com.google.firebase.iid.FirebaseInstanceIdService;

public class MyFirebaseInstanceIdService extends FirebaseInstanceIdService {
    final String TAG = "fili_demo";
    @Override
    public void onTokenRefresh() {
        //在 token 更新時，(或者第一次產生時)，此時可以取得這個 token
        String refreshedToken = FirebaseInstanceId.getInstance().getToken();
        Log.d(TAG, "用戶的token更新為: " + refreshedToken);

        //必須設計一套機制，將這個 token 發給我們的後台
        //讓後臺記住 這個客戶 是 這個 token

        //此時先省略
    }
}
