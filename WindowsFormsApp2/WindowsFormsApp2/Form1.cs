using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp2
{
    public partial class Form1 : Form
    {
        public Button btn1;

        public Form1()
        {
            
            btn1 = new Button();
            btn1.Size = new Size(40, 40);
            btn1.Location = new Point(30, 30);
            btn1.Text = "OK";
            this.Controls.Add(btn1);
            btn1.Click += new EventHandler(btn1_Click);

        }
        private void btn1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("this is click");
        }
        [STAThread]
        static void Main ()
        {
            //Application.EnableVisualStyles();
            Application.Run(new Form1());
        }

        private void timeLabel_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
