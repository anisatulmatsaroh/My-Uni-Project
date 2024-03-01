package com.example.e_ft;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageButton;
import android.widget.TextView;

import androidx.fragment.app.Fragment;

public class Home2 extends Fragment {
    ImageButton btn_img, btn_img2, btn_img3, btn_img4, btn_img5, btn_img6;
    TextView txtview1, txtview2, txtview3, txtview4, txtview5;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                              Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_home, container, false);



        btn_img = (ImageButton) view.findViewById(R.id.b_tif);
        btn_img2 = (ImageButton) view.findViewById(R.id.b_si);
        btn_img3 = (ImageButton) view.findViewById(R.id.b_te);
        btn_img4 = (ImageButton) view.findViewById(R.id.b_tind);
        btn_img5 = (ImageButton) view.findViewById(R.id.b_tm);
        btn_img6 = (ImageButton) view.findViewById(R.id.b_tmeka);
        btn_img.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://informatika.trunojoyo.ac.id/";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);

            }
        });
        btn_img2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://si.trunojoyo.ac.id/";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        btn_img3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://elektro.trunojoyo.ac.id/";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        btn_img4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://industri.trunojoyo.ac.id/";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        btn_img5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://mesin.trunojoyo.ac.id/";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        btn_img6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://mekatronika.trunojoyo.ac.id/";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });

        txtview1=(TextView)view.findViewById(R.id.info1);
        txtview2=(TextView)view.findViewById(R.id.info2);
        txtview3=(TextView)view.findViewById(R.id.info3);
        txtview4=(TextView)view.findViewById(R.id.info4);
        txtview5=(TextView)view.findViewById(R.id.info5);
        txtview1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(v.getContext(),info.class);
                startActivity(intent);

            }
        });
        txtview2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(v.getContext(),info2.class);
                startActivity(intent);

            }
        });
        txtview3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(v.getContext(),info3.class);
                startActivity(intent);

            }
        });
        txtview4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(v.getContext(),info4.class);
                startActivity(intent);

            }
        });
        txtview5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(v.getContext(),info5.class);
                startActivity(intent);

            }
        });
        return view;
    }

}

