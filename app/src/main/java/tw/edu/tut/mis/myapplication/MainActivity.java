package tw.edu.tut.mis.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

public class MainActivity extends AppCompatActivity {
    final String TAG = "fili_demo";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Bundle bd = getIntent().getExtras();

        //偵錯用
        if( bd!=null ){
            for(String k : bd.keySet()){
                Object v = bd.get(k);
                Log.d(TAG, "收到的EXTRAS中, Key="+k+"  Value="+v );
            }
        }

        //bd.get("某名稱1")

    }
}
