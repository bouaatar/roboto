import tkinter as tk
from PIL import Image, ImageTk
import cv2
import pygame
import random
import os
import tkinter.messagebox

# ==========================================
# 1. قاعدة البيانات (المدن، المآثر، والأسئلة)
# ==========================================

CITIES_DATA = {
    "طنجة": {
        "desc": "عروس الشمال وبوابة إفريقيا الساحرة! حيث يعانق البحر الأبيض المتوسط المحيط الأطلسي.",
        "monuments": [
            {"name": "مغارة هرقل", "info": "مغارة أسطورية منحوتة في الصخر تشبه فتحتها خريطة إفريقيا."},
            {"name": "منارة سبارطيل", "info": "منارة شامخة ترشد السفن عند نقطة التقاء البحرين."},
            {"name": "قصبة طنجة", "info": "حصن عريق يطل على الميناء ويضم قصوراً ومتاحف تاريخية."}
        ]
    },
    "تطوان": {
        "desc": "الحمامة البيضاء ذات الطابع الأندلسي العريق والأزقة البيضاء الجميلة.",
        "monuments": [
            {"name": "المدينة العتيقة", "info": "تراث عالمي يتميز بالعمارة الأندلسية الأصيلة."},
            {"name": "مدرسة الفنون", "info": "مركز عريق لإحياء الفنون التقليدية والزخرفة المغربية."},
            {"name": "قصر المشور", "info": "ساحة كبرى وقلب المدينة النابض بالاحتفالات التقليدية."}
        ]
    },
    "فاس": {
        "desc": "العاصمة العلمية والروحية للمملكة! مهد أقدم جامعة في العالم ومتحف حي للتاريخ.",
        "monuments": [
            {"name": "جامع القرويين", "info": "أقدم جامعة في العالم أسستها فاطمة الفهرية عام 859م."},
            {"name": "المدرسة البوعنانية", "info": "تحفة مرينية تجمع بين روعة الزليج والنقش على الخشب."},
            {"name": "باب بوجلود", "info": "البوابة الزرقاء الشهيرة التي تعتبر مدخل المدينة العتيقة."}
        ]
    },
    "مكناس": {
        "desc": "العاصمة الإسماعيلية ومدينة الأسوار الضخمة والأبواب العظيمة التي بناها المولى إسماعيل.",
        "monuments": [
            {"name": "باب منصور", "info": "أضخم باب في المغرب ومن أجمل أبواب العالم بفسيفسائه."},
            {"name": "صهريج السواني", "info": "خزان مياه عملاق كان يزود المدينة وحدائقها بالماء قديماً."},
            {"name": "ساحة الهديم", "info": "الساحة الكبرى التي تجمع بين فنون الحلقة والأسواق التقليدية."}
        ]
    },
    "الرباط": {
        "desc": "عاصمة الأنوار ومدينة الحدائق! تجمع بين عبق التاريخ الموحدي وحداثة الحاضر.",
        "monuments": [
            {"name": "صومعة حسان", "info": "مئذنة تاريخية غير مكتملة من عهد الموحدين تعد رمزاً للعاصمة."},
            {"name": "قصبة الوداية", "info": "حصن عريق بأزقة زرقاء ساحرة يطل على نهر أبي رقراق."},
            {"name": "ضريح محمد الخامس", "info": "تحفة معمارية جنائزية مبنية بالرخام الأبيض والزليج الأصيل."}
        ]
    },
    "سلا": {
        "desc": "مدينة العلم والجهاد البحري! جارة الرباط العريقة التي حافظت على أسوارها الحصينة.",
        "monuments": [
            {"name": "باب المريسة", "info": "باب مائي تاريخي كانت تعبر منه السفن إلى قلب المدينة."},
            {"name": "المدرسة المرينية", "info": "من أجمل المدارس العتيقة بزخرفتها الأندلسية الدقيقة."},
            {"name": "المسجد الأعظم", "info": "ثالث أكبر مسجد في المغرب ومن أقدمها تاريخياً."}
        ]
    },
    "الدار البيضاء": {
        "desc": "القلب الاقتصادي والنابض للمملكة، مدينة تجمع بين العمران الحديث والمآثر الكبرى.",
        "monuments": [
            {"name": "مسجد الحسن الثاني", "info": "معلمة معمارية فوق الماء تمتلك أعلى مئذنة في العالم."},
            {"name": "حي الحبوس", "info": "حي بُني بطراز مغربي أندلسي يضم مكتبات وأسواقاً تقليدية."},
            {"name": "ساحة محمد الخامس", "info": "المركز الإداري للمدينة المحاط بمباني تاريخية جميلة."}
        ]
    },
    "مراكش": {
        "desc": "المدينة الحمراء وعاصمة النخيل! وجهة العالم بساحاتها النابضة وقصورها الأسطورية.",
        "monuments": [
            {"name": "صومعة الكتبية", "info": "رمز مراكش التاريخي وشقيقة صومعة حسان بالرباط."},
            {"name": "قصر الباهية", "info": "قصر رائع يجسد جمال النقش المغربي والحدائق الأندلسية."},
            {"name": "ساحة جامع الفناء", "info": "قلب مراكش النابض بالفنون الشعبية والتراث اللامادي."}
        ]
    },
    "الصويرة": {
        "desc": "موكادور، مدينة الرياح والنوارس! تشتهر بأسوارها البرتغالية وصناعة خشب العرعار.",
        "monuments": [
            {"name": "سقالة المدينة", "info": "حصن دفاعي يضم مدافع نحاسية قديمة تطل على المحيط."},
            {"name": "المدينة العتيقة", "info": "تراث عالمي بأزقة زرقاء وبيضاء مريحة للنفس."},
            {"name": "جزيرة موكادور", "info": "جزيرة تاريخية قبالة المدينة كانت تستخدم للدفاع والتجارة."}
        ]
    },
    "أكادير": {
        "desc": "عروس الأطلسي ومدينة الانبعاث! تشتهر بشمسها المشرقة وقصبتها الشامخة فوق الجبل.",
        "monuments": [
            {"name": "قصبة أوفلا", "info": "حصن جبلي يطل على المدينة ويحمل شعار 'الله الوطن الملك'."},
            {"name": "سوق الأحد", "info": "أكبر سوق حضري في إفريقيا يضم كنوز الصناعة التقليدية."},
            {"name": "مارينا أكادير", "info": "ميناء حديث يجمع بين السياحة والجمالية المعمارية."}
        ]
    }
}

QUIZ_QUESTIONS = [
    {"question": "أي مدينة مغربية تسمى 'الحمامة البيضاء'؟", "options": ["طنجة", "تطوان", "العرائش"], "answer": "تطوان"},
    {"question": "أين توجد مغارة هرقل؟", "options": ["طنجة", "أصيلة", "الصويرة"], "answer": "طنجة"},
    {"question": "من أسست جامعة القرويين؟", "options": ["كنزة", "فاطمة الفهرية", "السيدة الحرة"], "answer": "فاطمة الفهرية"},
    {"question": "أين يوجد باب منصور؟", "options": ["فاس", "مكناس", "سلا"], "answer": "مكناس"},
    {"question": "لون مدينة مراكش التاريخي؟", "options": ["أبيض", "أحمر", "أزرق"], "answer": "أحمر"},
    {"question": "أين توجد صومعة حسان الشهيرة؟", "options": ["سلا", "الرباط", "الدار البيضاء"], "answer": "الرباط"},
    {"question": "ما اسم المسجد الذي يمتلك أعلى مئذنة ويقع فوق الماء؟", "options": ["مسجد الكتبية", "مسجد الحسن الثاني", "مسجد القرويين"], "answer": "مسجد الحسن الثاني"},
    {"question": "بماذا تشتهر مدينة الصويرة قديماً؟", "options": ["موكادور", "تامدولت", "وليلي"], "answer": "موكادور"},
    {"question": "أي مدينة كانت عاصمة في عهد المولى إسماعيل؟", "options": ["فاس", "مراكش", "مكناس"], "answer": "مكناس"},
    {"question": "بماذا تعرف مدينة شفشاون؟", "options": ["المدينة الخضراء", "المدينة الزرقاء", "المدينة الصفراء"], "answer": "المدينة الزرقاء"}
] # يمكن إضافة بقية الـ 40 سؤالاً هنا

# ==========================================
# 2. الفريمات (Frames)
# ==========================================

class BaseFrame(tk.Frame):
    def __init__(self, parent, controller, bg_img):
        super().__init__(parent, bg="black")
        self.controller = controller
        self.bg_img_name = bg_img
        self.canvas = tk.Canvas(self, highlightthickness=0)
        self.canvas.pack(fill="both", expand=True)
        self.bind("<Configure>", self.on_resize)

    def on_resize(self, event):
        path = f"assets/{self.bg_img_name}"
        if os.path.exists(path):
            img = Image.open(path).resize((event.width, event.height), Image.Resampling.LANCZOS)
            self.bg_photo = ImageTk.PhotoImage(img)
            self.canvas.create_image(0, 0, image=self.bg_photo, anchor="nw")
            if hasattr(self, "draw_ui"): self.draw_ui(event.width, event.height)

class SplashScreen(tk.Frame):
    def __init__(self, parent, controller, asset):
        super().__init__(parent, bg="black")
        self.controller = controller
        self.sw = self.winfo_screenwidth()
        self.sh = self.winfo_screenheight()
        self.canvas = tk.Canvas(self, bg="black", highlightthickness=0, width=self.sw, height=self.sh)
        self.canvas.pack(fill="both", expand=True)
        self.cap = cv2.VideoCapture(f"assets/{asset}")
        self.play_video()

    def play_video(self):
        ret, frame = self.cap.read()
        if ret:
            frame = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)
            frame = cv2.resize(frame, (self.sw, self.sh))
            self.img = ImageTk.PhotoImage(image=Image.fromarray(frame))
            self.canvas.create_image(0, 0, image=self.img, anchor="nw")
            self.after(15, self.play_video)
        else:
            self.cap.release()
            self.controller.finish_splash()

class MainMenu(BaseFrame):
    def draw_ui(self, w, h):
        self.canvas.delete("ui")
        btn_style = {"font": ("Traditional Arabic", 24, "bold"), "bg": "#D4AF37", "width": 18, "cursor": "hand2"}
        b1 = tk.Button(self, text="اكتشف كنوز المغرب", command=lambda: self.controller.show_frame("ExploreMap"), **btn_style)
        b2 = tk.Button(self, text="المسابقة الكبرى", command=lambda: self.controller.show_frame("QuizEngine"), **btn_style)
        b3 = tk.Button(self, text="مساعدة", command=lambda: self.controller.show_frame("HelpFrame"), **btn_style)
        b4 = tk.Button(self, text="خروج", command=self.controller.quit, **btn_style)
        
        self.canvas.create_window(w*0.5, h*0.35, window=b1, tags="ui")
        self.canvas.create_window(w*0.5, h*0.5, window=b2, tags="ui")
        self.canvas.create_window(w*0.5, h*0.65, window=b3, tags="ui")
        self.canvas.create_window(w*0.5, h*0.8, window=b4, tags="ui")

class ExploreMap(BaseFrame):
    def draw_ui(self, w, h):
        self.canvas.delete("map")
        rel_pos = {
        "طنجة": (0.80, 0.13),    
        "تطوان": (0.82, 0.15),   
        "الرباط": (0.75, 0.25),     
        "سلا": (0.76, 0.24),  
        "فاس": (0.80, 0.26),     
        "مكناس": (0.83, 0.28),   
        "الدار البيضاء": (0.72, 0.30), 
        "مراكش": (0.75, 0.36),   
        "الصويرة": (0.70, 0.37),  
        "أكادير": (0.71, 0.43)   
        }
        for city, (rx, ry) in rel_pos.items():
            btn = tk.Button(self, text=city, font=("Arial", 9, "bold"), bg="#B03A2E", fg="white", bd=0, padx=5, cursor="hand2",
                            command=lambda c=city: self.controller.show_frame("CityDetails", city_name=c))
            self.canvas.create_window(w*rx, h*ry, window=btn, tags="map")
        
        back = tk.Button(self, text="⬅ عودة", command=lambda: self.controller.show_frame("MainMenu"), bg="#333", fg="white", font=("Arial", 12))
        self.canvas.create_window(w*0.05, h*0.05, window=back, tags="map")

class CityDetails(BaseFrame):
    def update_data(self, city_name=None):
        self.city_name = city_name
        if city_name:
            self.controller.shared_data["selected_city"] = city_name
            self.controller.play_sound(f"{city_name}.mp3")
        if hasattr(self, "winfo_width"): self.draw_ui(self.winfo_width(), self.winfo_height())

    def draw_ui(self, w, h):
        self.canvas.delete("details")
        if not hasattr(self, "city_name") or not self.city_name: return
        data = CITIES_DATA.get(self.city_name, {})
        self.canvas.create_text(w*0.5, h*0.15, text=self.city_name, font=("Traditional Arabic", 48, "bold"), fill="#B03A2E", tags="details")
        self.canvas.create_text(w*0.5, h*0.35, text=data["desc"], font=("Arial", 18, "bold"), fill="black", width=w*0.7, justify="center", tags="details")
        for i, mon in enumerate(data["monuments"]):
            btn = tk.Button(self, text=mon["name"], font=("Arial", 14, "bold"), bg="#D4AF37", width=20, 
                            command=lambda m=mon: self.controller.show_frame("MonumentDetails", mon=m))
            self.canvas.create_window(w*0.5, h*0.55 + (i*70), window=btn, tags="details")
        back = tk.Button(self, text="⬅ عودة للخريطة", command=lambda: self.controller.show_frame("ExploreMap"), bg="#333", fg="white", font=("Arial", 12))
        self.canvas.create_window(w*0.08, h*0.05, window=back, tags="details")

class MonumentDetails(BaseFrame):
    def update_data(self, mon=None):
        self.mon = mon
        if hasattr(self, "winfo_width"): self.draw_ui(self.winfo_width(), self.winfo_height())

    def draw_ui(self, w, h):
        self.canvas.delete("mon_ui")
        if not hasattr(self, "mon") or not self.mon: return
        self.canvas.create_text(w*0.5, h*0.2, text=self.mon["name"], font=("Traditional Arabic", 40, "bold"), fill="#1A5276", tags="mon_ui")
        self.canvas.create_text(w*0.5, h*0.5, text=self.mon["info"], font=("Arial", 22, "bold"), fill="black", width=w*0.7, justify="center", tags="mon_ui")
        back = tk.Button(self, text="⬅ رجوع للمدينة", command=lambda: self.controller.show_frame("CityDetails", city_name=self.controller.shared_data["selected_city"]), bg="#333", fg="white", font=("Arial", 12))
        self.canvas.create_window(w*0.08, h*0.05, window=back, tags="mon_ui")

class QuizEngine(BaseFrame):
    def update_data(self):
        self.score, self.idx = 0, 0
        self.timer_seconds = 15
        self.after_id = None
        self.qs = random.sample(QUIZ_QUESTIONS, min(len(QUIZ_QUESTIONS), 20))
        self.draw_ui(self.winfo_width(), self.winfo_height())

    def draw_ui(self, w, h):
        self.canvas.delete("quiz")
        if self.after_id: self.after_cancel(self.after_id)
        btn_back = tk.Button(self, text="⬅ عودة", font=("Arial", 12), bg="#333", fg="white", command=self.go_back)
        self.canvas.create_window(w*0.05, h*0.05, window=btn_back, tags="quiz")
        if self.idx < len(self.qs):
            self.timer_text = self.canvas.create_text(w*0.9, h*0.05, text=f"⏱ {self.timer_seconds}", font=("Arial", 20, "bold"), fill="white", tags="quiz")
            q = self.qs[self.idx]
            self.canvas.create_text(w*0.5, h*0.2, text=f"سؤال {self.idx+1}/20\n{q['question']}", font=("Arial", 22, "bold"), fill="white", tags="quiz", justify="center")
            for i, opt in enumerate(q["options"]):
                btn = tk.Button(self, text=opt, font=("Arial", 16), width=35, command=lambda o=opt: self.check(o))
                self.canvas.create_window(w*0.5, h*0.45 + (i*75), window=btn, tags="quiz")
            self.run_timer()
        else:
            self.canvas.create_text(w*0.5, h*0.5, text=f"انتهت المسابقة!\nنقاطك: {self.score}/20", font=("Arial", 30, "bold"), fill="gold", tags="quiz", justify="center")

    def run_timer(self):
        if self.timer_seconds > 0:
            self.timer_seconds -= 1
            self.canvas.itemconfig(self.timer_text, text=f"⏱ {self.timer_seconds}")
            if self.timer_seconds <= 5: self.canvas.itemconfig(self.timer_text, fill="red")
            self.after_id = self.after(1000, self.run_timer)
        else:
            self.controller.play_effect("wrong.mp3")
            self.next_question()

    def check(self, sel):
        if self.after_id: self.after_cancel(self.after_id)
        if sel == self.qs[self.idx]["answer"]:
            self.score += 1
            self.controller.play_effect("correct.mp3")
        else:
            self.controller.play_effect("wrong.mp3")
        self.next_question()

    def next_question(self):
        self.idx += 1
        self.timer_seconds = 15
        self.draw_ui(self.winfo_width(), self.winfo_height())

    def go_back(self):
        if self.after_id: self.after_cancel(self.after_id)
        self.controller.show_frame("MainMenu")

class HelpFrame(BaseFrame):
    def draw_ui(self, w, h):
        self.canvas.delete("help")
        txt = "تطبيق كنوز المغرب التاريخية\n\nتطوير الطالبة المبدعة: Rudayna Bouaatar\n\nاكتشف تاريخ بلادك بأسلوب ممتع.\nاستخدم الخريطة للمعرفة، ثم اختبر ذكاءك!"
        self.canvas.create_text(w*0.5, h*0.4, text=txt, font=("Traditional Arabic", 24, "bold"), fill="#2C3E50", justify="center", tags="help")
        tk.Button(self, text="رجوع", command=lambda: self.controller.show_frame("MainMenu"), bg="#B03A2E", fg="white", font=("Arial", 14, "bold")).place(x=w*0.45, y=h*0.8)

# ==========================================
# 3. محرك التطبيق الرئيسي
# ==========================================

class KounouzApp(tk.Tk):
    def __init__(self):
        super().__init__()
        self.title("كنوز المغرب التاريخية - Rudayna Bouaatar")
        self.attributes('-fullscreen', True)
        self.configure(bg="black")
        pygame.mixer.init()
        self.effect_channel = pygame.mixer.Channel(1)
        self.shared_data = {"selected_city": None}
        self.container = tk.Frame(self, bg="black")
        self.container.pack(side="top", fill="both", expand=True)
        self.frames = {}
        self.start_splash()

    def start_splash(self):
        frame = SplashScreen(self.container, self, "splash.mp4")
        self.frames["SplashScreen"] = frame
        frame.grid(row=0, column=0, sticky="nsew")
        frame.tkraise()

    def finish_splash(self):
        self.build_game_frames()
        self.show_frame("MainMenu")

    def build_game_frames(self):
        pages = [(MainMenu, "splash.jpg"), (ExploreMap, "index.jpg"), (CityDetails, "explorer.jpg"), (MonumentDetails, "explorer.jpg"), (QuizEngine, "question.jpg"), (HelpFrame, "aide.jpg")]
        for F, asset in pages:
            self.frames[F.__name__] = F(parent=self.container, controller=self, bg_img=asset)
            self.frames[F.__name__].grid(row=0, column=0, sticky="nsew")

    def show_frame(self, page_name, **kwargs):
        if page_name in self.frames:
            frame = self.frames[page_name]
            if hasattr(frame, "update_data"): frame.update_data(**kwargs)
            frame.tkraise()

    def play_sound(self, sound_file):
        path = f"assets/{sound_file}"
        if os.path.exists(path):
            pygame.mixer.music.load(path)
            pygame.mixer.music.play()

    def play_effect(self, effect_file):
        path = f"assets/{effect_file}"
        if os.path.exists(path):
            self.effect_channel.play(pygame.mixer.Sound(path))

if __name__ == "__main__":
    app = KounouzApp()
    app.mainloop()